<?php

namespace App\poligonos;

class Quadrado {

    protected $largura;
    protected $altura;
    
    public function getLargura()
    {
        return $this->largura;
    }

    public function setLargura(float $largura): void
    {
        $this->largura = $largura;
        $this->altura = $largura;
    }

    public function getAltura(): float
    {
        return $this->altura;
    }

    public function setAltura(float $altura): void
    {
        $this->altura = $altura;
        $this->largura = $altura;
    }

}