<?php

use PHPUnit\Framework\TestCase;
use App\Item;

class ItemTest extends TestCase {

    public function testEstadoInicialItem()
    {
        $item = new Item();

        //asserções do PHP
        $this->assertEquals('', $item->getDescricao());
        $this->assertEquals(0, $item->getValor());
    }

    public function testGeteSetDescricao()
    {
        $descricao = 'cadeira de plastico';
        $item = new Item();
        $item->setDescricao($descricao);
        $this->assertEquals($descricao, $item->getDescricao());
    }

    public function testItemValido()
    {
        $item = new Item();
        //submeter item valido e ver se vai ret OK
        $item->setValor(55.99);
        $item->setDescricao('cadeira de plastico');
        $this->assertEquals(true, $item->itemValido());
        
        //submeter item invalido e retornoar false
        $item->setValor(55.99);
        $item->setDescricao('');
        $this->assertEquals(false, $item->itemValido());

        //submeter item invalido e retornoar false
        $item->setValor(-100);
        $item->setDescricao('Abc');
        $this->assertEquals(false, $item->itemValido());

        //submeter item invalido e retornoar false
        $item->setValor(0);
        $item->setDescricao('');
        $this->assertEquals(false, $item->itemValido());
    }

    //Sintaxe para conectar um teste a um dataProvider (provedor de variaveis)
    /**
     * @dataProvider dataValores
     */
    public function testeGeteSetvalor($valor)
    {
        $item = new Item();
        $item->setValor($valor);
        $this->assertEquals($valor, $item->getValor());
    }


    public function dataValores()
    {
        return [
            [100],
            [-2],
            [0],
        ];
    }


}