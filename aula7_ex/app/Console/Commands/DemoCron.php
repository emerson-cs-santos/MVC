<?php

namespace App\Console\Commands;
use Illuminate\Console\Command;

class DemoCron extends Command

{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
     protected $signature = 'demo:cron';

    /**
     * The console command description.
     *
     * @var string
     */
     protected $description = 'Exemplo 1 de Task Scheduling - Cria uma linha no log da pasta storage.';

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
        \Log::info("Cron is working fine!");
        $this->info('Demo:Cron Cummand Run successfully!');
    }
}
