<?php

namespace App\Console\Commands;

use App\Holding;
use App\Http\Services\ExchangePeriodService;
use Illuminate\Console\Command;

class StartExchange extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'exchange:start';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Starts stock exchange';
    /**
     * @var ExchangePeriodService
     */
    private $exchangePeriodService;

    /**
     * Create a new command instance.
     *
     * @param ExchangePeriodService $exchangePeriodService
     */
    public function __construct(
        ExchangePeriodService $exchangePeriodService
    ) {
        parent::__construct();
        $this->exchangePeriodService = $exchangePeriodService;
    }

    /**
     * Execute the console command.
     *
     * @return mixed
     */
    public function handle()
    {
        $holding = Holding::all()->last();

        if (!$holding) {
            echo "No holdings found. Please create one first using command create:holding.\n";
        } else {
            $this->exchangePeriodService->startExchange($holding);
        }
    }
}
