<?php

require 'Elevador.php';
require 'Pessoa.php';


class indexTest extends PHPUnit_Framework_TestCase
{

    public function testElevador()
    {
        $elevador = new Elevador();
        $pessoa = new Pessoa(1);
        $pessoa->chamaElevador();

        /**
        * Teste para conferir se o elevador foi para o andar que a pessoa está
        */
        $this->assertEquals(1, $elevador->getAndarElevador());

        $pessoa->entrarElevador();
        $pessoa->vaiParaAndar(4);

        /**
        * Teste para conferir se o elevador foi para o andar que a pessoa está
        */
        $this->assertEquals(4,$elevador->getAndarElevador());

    }
}	
