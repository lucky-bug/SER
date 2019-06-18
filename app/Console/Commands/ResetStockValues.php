<?php

namespace App\Console\Commands;

use App\StockValue;
use Illuminate\Console\Command;

class ResetStockValues extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'reset:stocks';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Resets all stocks values';

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
        StockValue::truncate();
    }
}
