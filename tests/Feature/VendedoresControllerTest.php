<?php

namespace Tests\Feature;

use App\Http\Controllers\VendedoresController;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;

class VendedoresControllerTest extends TestCase
{
    private $vendedores;
    
    public function __construct()
    {
        $this->vendedores = new VendedoresController;

    }
    /**
     * A basic feature test example.
     *
     * @return void
     */
    public function testCheckVendedor()
    {
        $this->assertTrue($this->vendedores->checkVendedor(1));
    }

    public function testGetVendedor(){
        $this->assertEquals('Paulo', $this->vendedores->getVendedor(1));
    }

}
