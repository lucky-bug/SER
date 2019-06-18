<?php

namespace App\Console\Commands;

use App\Holding;
use Illuminate\Console\Command;

class CreateHolding extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'create:holding';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Creates a holding with default values';

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
        return (new Holding())->save();
    }
}
