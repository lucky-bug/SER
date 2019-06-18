<?php

namespace App\Console\Commands;

use App\Holding;
use App\OwnedStock;
use Illuminate\Console\Command;

class Reset extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'reset:basic';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Resets holdings and their stocks';

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
        Holding::truncate();
        OwnedStock::truncate();
    }
}
