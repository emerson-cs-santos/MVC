<?php

namespace App\Console\Commands;
use Illuminate\Console\Command;

class AgendaInsert extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'agenda:insert';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Exemplo 2 de Task Scheduling - Faz um insert na tabela de categorias.';

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
        \App\Categorias::create( [ 'nome' => 'Nome_Auto', 'img' => 'caminho_auto' ] );

        $this->info('Agenda:Insert - Esse comando funciona!');
    }
}
