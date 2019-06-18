<?php

namespace App\Console\Commands;

use App\Holding;
use App\Http\Services\ExchangePeriodService;
use Illuminate\Console\Command;

class NextExchange extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'exchange:next';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Moves to next stock exchange date';

    /**
     * Create a new command instance.
     *
     * @return void
     */
    public function __construct()
    {
        parent::__construct();
    }

    /**
     * Execute the console command.
     *
     * @return mixed
     */
    public function handle()
    {
        /**
         * @var ExchangePeriodService $service
         */
        $service = App(ExchangePeriodService::class);
        $holding = Holding::all()->last();

        if (!$holding) {
            echo "No holdings found. Please create one first using command create:holding.\n";
        } else {
            $service->moveToNext($holding);
        }
    }
}
