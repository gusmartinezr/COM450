<?php

namespace Tests\Unit;

use PHPUnit\Framework\TestCase;

class ObternerAccionTest extends TestCase
{
    /**
     * A basic unit test example.
     *
     * @return void
     */
    public function prueba1()
    {
        $this->assertEquals('actualizar', Accion::ObternerAccion(true,true));
    }
}
