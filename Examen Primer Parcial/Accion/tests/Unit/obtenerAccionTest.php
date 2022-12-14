<?php

namespace Tests\Unit;

use PHPUnit\Framework\TestCase;
use App\Library\obtenerAccion;

class obtenerAccionTest extends TestCase
{
    /**
     * A basic unit test example.
     *
     * @return void
     */
    public function test_prueba1()
    {
        $this->assertEquals("actualizar", obtenerAccion::obtenerAccion(true,true));
    }
    public function test_prueba2()
    {
        $this->assertEquals("matricular", obtenerAccion::obtenerAccion(false,true));
    }
    public function test_prueba3()
    {
        $this->assertEquals("actualizar", obtenerAccion::obtenerAccion(false,false,true,"porConfirmar"));
    }
    public function test_prueba4()
    {
        $this->assertEquals("registrar", obtenerAccion::obtenerAccion(false,false,true,"","externo"));
    }
    public function test_prueba5()
    {
        $this->assertEquals("matricular", obtenerAccion::obtenerAccion(false,false,true,"vigente",""));
    }
}

