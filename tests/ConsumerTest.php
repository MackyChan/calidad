<?php

namespace Tests;

use App\Dummy;

class ConsumerTest extends \PHPUnit_Framework_TestCase
{
    /**
    * Probar nombre completo
    */
    public function testNombreCompleto()
    {
        
$consumer = new Dummy();
$consumer->setNombre('Andrea');
$consumer->setApellido('Chi Kim ');
$result = $consumer->nombreCompleto();
$this->assertEquals('Andrea Chi Kim', $result);
        
    }
}
