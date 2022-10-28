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
    public function test_example()
    {
        $this->assertEquals("actualizar", obtenerAccion::obtenerAccion(true,true));
    }
}
