<?php

use App\Company;
use App\Holding;
use App\Http\Services\StockValueService;
use App\StockValue;
use Illuminate\Database\Seeder;

class StockValuesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        /**
         * @var StockValueService $stockValueService
         */
        $stockValueService = App(StockValueService::class);

        Company::all()->each(
            function (Company $company) use ($stockValueService) {
                // Fetch stock values with default parameters and save them
                $stockValueService->fetchStockValues($company, new Holding())->each(
                    function (StockValue $stockValue) {
                        $stockValue->save();
                    }
                );
            }
        );
    }
}
