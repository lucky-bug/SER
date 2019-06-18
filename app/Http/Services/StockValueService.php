<?php

namespace App\Http\Services;

use App\Company;
use App\Holding;
use App\StockValue;
use GuzzleHttp\ClientInterface;
use Illuminate\Support\Collection;

class StockValueService
{
    /**
     * @var ClientInterface
     */
    private $client;

    public function __construct(
        ClientInterface $client
    )
    {
        $this->client = $client;
    }

    public function fetchStockValues(Company $company, Holding $holding): Collection
    {
        return collect(
            json_decode(
                $this
                    ->client
                    ->request(
                        'POST',
                        'http://portal-widgets-v3.foreks.com/periodic-tabs/data',
                        [
                            'form_params' => [
                                'id' => 'graph1',
                                'code' => "{$company->getCode()}.E.BIST",
                                'period' => $holding->getTimePeriod(),
                                'intraday' => 60,
                                'delay' => 15,
                                'linecolor' => '#000',
                            ]
                        ]
                    )
                    ->getBody()
                    ->getContents(),
                true
            )["data"]
        )->map(
            function ($item, $index) use ($company, $holding) {
                return [
                    'company_id' => $company->getId(),
                    'time' => $item[0],
                    'value' => $item[1],
                ];
            }
        )->mapInto(StockValue::class);
    }

    public function calculateProfit(Collection $stockValues): float
    {
        $percents = $stockValues->map(
            function (StockValue $item, $index) use ($stockValues) {
                return $index === 0
                    ? 0
                    : $this->calculatePercent($item->getValue(), $stockValues->first()->getValue());
            }
        );

        $positivePercents = $percents->filter(
            function ($value) {
                return $value > 0 ? true : false;
            }
        );

        $negativePercents = $percents->filter(
            function ($value) {
                return $value < 0 ? true : false;
            }
        );

        return number_format(
            $positivePercents->count() > $negativePercents->count()
                ? $positivePercents->avg()
                : $negativePercents->avg(),
            2
        );
    }

    public function getAnalysableStockValues(Holding $holding, Company $company): Collection
    {
        // Every stock value before current stock value index can be used as a analysable data
        return $company->getStockValues()->sortBy('time')->take($holding->getCurrentStockValueIndex());
    }

    private function calculatePercent(float $a, float $b): float
    {
        return number_format(
            ($a - $b) / $b * 100,
            2
        );
    }
}