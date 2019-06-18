<?php

namespace App\Http\Services;

use App\Company;
use App\Holding;

class ExchangePeriodService
{
    /**
     * @var Company
     */
    private $company;
    /**
     * @var StockExchangeService
     */
    private $stockExchangeService;

    public function __construct(
        StockExchangeService $stockExchangeService,
        Company $company
    ) {
        $this->stockExchangeService = $stockExchangeService;
        $this->company = $company;
    }

    public function moveToNext(Holding $holding)
    {
        $holding->setCurrentStockValueIndex(
            $holding->getCurrentStockValueIndex() + $holding->getExchangePeriod()
        )->save();
    }

    public function startExchange(Holding $holding) {
        $this->stockExchangeService->exchangeStocks($holding);
    }
}