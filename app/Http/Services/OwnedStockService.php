<?php

namespace App\Http\Services;

use App\Holding;
use App\OwnedStock;
use Illuminate\Support\Collection;

class OwnedStockService
{
    public function getOwnedStocks(Holding $holding): Collection
    {
        return $holding->getOwnedStocks()->filter(function (OwnedStock $ownedStock) {
            return $ownedStock->getQuantity() > 0;
        });
    }

    public function calculateSellProfit(OwnedStock $ownedStock, float $currentValue, int $quantity): float
    {
        return ($quantity * $currentValue) - ($quantity * $ownedStock->getValue());
    }
}