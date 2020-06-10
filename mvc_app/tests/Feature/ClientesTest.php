<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;
use App\Clientes;
use Illuminate\Foundation\Testing\DatabaseTransactions;

class ClientesTest extends TestCase
{
    use DatabaseTransactions;
    public function testCreate()
    {
        $cliente = Clientes::create([   'nome'      => 'Bono Testes',
                                        'endereco'  => 'Planeta Terrsa',
                                        'email'     => 'luiz.fabmilian2@sp.senac.br',
                                        'telefone'  =>  '11994785425']);

        $this->assertDatabaseHas('Clientes', ['nome' => 'Bono Testes']);

      //  $cliente->destroy($cliente->id);

     //   $this->assertDatabaseMissing('Clientes', ['nome'=>'Bono Testes']);
    }
}
