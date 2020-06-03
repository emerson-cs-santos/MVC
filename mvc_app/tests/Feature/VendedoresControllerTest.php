<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;
use App\Http\Controllers\VendedoresController;

class VendedoresControllerTest extends TestCase
{
    private $vendedores;

    public function __construct()
    {
        // Executa o construct da classe TestCase
        parent:: __construct();
        $this->vendedores = new VendedoresController;
    }

    public function testCheckVendedor()
    {
        $vendedores = new VendedoresController;
        // Teste para checar se vai true ou false, true sendo quando funcionar neste caso.
        $this->assertTrue( $vendedores->checkVendedor(1) );
        $this->assertFalse( $vendedores->checkVendedor(9) );
    }

    public function testGetVendedor()
    {
        $vendedores = new VendedoresController;
        $this->assertEquals( 'Marcos', $this->vendedores->getVendedor(1) );
    }

    public function testeIndex()
    {
        $this->assertJson( $this->vendedores->getJSON() );
    }

    // Exercicios, 3 testes usando outros asserts

    // assertEmpty
    public function testeVazio()
    {
        $this->assertEmpty  ( $this->vendedores->getTextoErros() );
    }

    // assertNotEmpty
    public function testeNaoVazio()
    {
        $this->assertNotEmpty  ( $this->vendedores->getTexto() );
    }

    // assertStringContainsString
    public function testeString()
    {
        $this->assertStringContainsString  ('Teste', $this->vendedores->getString() );
    }
}
