<?php

namespace App\Http\Services;

use App\Company;
use App\Holding;
use App\OwnedStock;
use App\StockValue;
use Illuminate\Support\Collection;

class StockExchangeService
{
    /**
     * @var Company
     */
    private $company;
    /**
     * @var StockValue
     */
    private $stockValue;
    /**
     * @var StockValueService
     */
    private $stockValueService;
    /**
     * @var OwnedStockService
     */
    private $ownedStockService;

    public function __construct(
        StockValueService $stockValueService,
        OwnedStockService $ownedStockService,
        Company $company,
        StockValue $stockValue
    )
    {
        $this->stockValueService = $stockValueService;
        $this->ownedStockService = $ownedStockService;
        $this->company = $company;
        $this->stockValue = $stockValue;
    }

    public function exchangeStocks(Holding $holding)
    {
        $ownedStocks = $this->ownedStockService->getOwnedStocks($holding)->sort(
            function (OwnedStock $ownedStockA, OwnedStock $ownedStockB) use ($holding) {
                $stockACurrentValue = $ownedStockA
                    ->getCompany()
                    ->getStockValues()
                    ->get($holding->getCurrentStockValueIndex())
                ;

                if ($stockACurrentValue === null) {
                    $stockACurrentValue = $ownedStockA
                        ->getCompany()
                        ->getStockValues()
                        ->last()
                    ;
                }

                $stockASellProfit = $this->ownedStockService->calculateSellProfit(
                    $ownedStockA,
                    $stockACurrentValue->getValue(),
                    $ownedStockA->getQuantity()
                );

                $stockBCurrentValue = $ownedStockB
                    ->getCompany()
                    ->getStockValues()
                    ->get($holding->getCurrentStockValueIndex())
                ;

                if ($stockBCurrentValue === null) {
                    $stockBCurrentValue = $ownedStockB
                        ->getCompany()
                        ->getStockValues()
                        ->last()
                    ;
                }

                $stockBSellProfit = $this->ownedStockService->calculateSellProfit(
                    $ownedStockB,
                    $stockBCurrentValue->getValue(),
                    $ownedStockB->getQuantity()
                );

                return $stockASellProfit < $stockBSellProfit;
            }
        );

        $this->getTopCompanies($holding)->take($holding->getMaxStockType())->each(
            function ($item) use ($ownedStocks, $holding) {
                /**
                 * @var Company $company
                 */
                $company = $this->company->find($item['company_id']);

                if ($ownedStocks->count() === $holding->getMaxStockType()) {
                    $this->sellStock(
                        $holding,
                        $ownedStocks->first(),
                        $ownedStocks->first()->getQuantity(),
                        $company->getStockValues()->get($holding->getCurrentStockValueIndex())->getValue()
                    );
                }

                $this->buyStock(
                    $holding,
                    $company,
                    $company->getStockValues()->get($holding->getCurrentStockValueIndex())
                        ? $company->getStockValues()->get($holding->getCurrentStockValueIndex())
                        : $company->getStockValues()->last()
                );
            }
        );
    }

    public function buyStock(Holding $holding, Company $company, StockValue $stockValue): bool
    {
        if ($this->ownedStockService->getOwnedStocks($holding)->count() === $holding->getMaxStockType()
            || $holding->getMoney() < $stockValue->getValue()) {
            return false;
        }

        $ownedStock = new OwnedStock([
            'holding_id' => $holding->getId(),
            'company_id' => $company->getId(),
            'quantity' => (int)($holding->getMoney() / $stockValue->getValue()),
            'value' => $stockValue->getValue(),
        ]);
        $ownedStock->save();
        $holding->setMoney($holding->getMoney() - ($ownedStock->getQuantity() * $stockValue->getValue()))->save();

        return true;
    }

    public function sellStock(Holding $holding, OwnedStock $ownedStock, int $quantity, float $value): bool
    {
        if (!$quantity) {
            $quantity = $ownedStock->getQuantity();
        } elseif ($quantity > $ownedStock->getQuantity()) {
            return false;
        }

        $ownedStock->setQuantity($ownedStock->getQuantity() - $quantity)->save();
        $holding->setMoney($holding->getMoney() + ($quantity * $value))->save();

        return true;
    }

    public function getTopCompanies(Holding $holding): Collection
    {
        return $this
            ->company
            ->all()
            ->map(
                function (Company $company) use ($holding) {
                    return [
                        'company_id' => $company->getId(),
                        'profit' => $this
                            ->stockValueService
                            ->calculateProfit(
                                $this->stockValueService->getAnalysableStockValues($holding, $company)
                            ),
                    ];
                }
            )
            ->sortByDesc('profit');
    }
}