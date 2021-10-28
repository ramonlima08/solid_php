<?php

namespace App;
use App\Retangulo;

class Quadrado extends Retangulo {
    
    //aqui nós ferimos a tipagem forte de comportamento do Retangulo
    public function setLargura(float $largura): void
    {
        $this->largura = $largura;
        $this->altura = $largura;
    }

    public function setAltura(float $altura): void
    {
        $this->largura = $altura;
        $this->altura = $altura;
    }

}