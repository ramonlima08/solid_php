<?php

namespace App;

class Retangulo {
    protected $largura;
    protected $altura;

    public function getLargura()
    {
        return $this->largura;
    }

    public function setLargura(float $largura): void
    {
        $this->largura = $largura;
    }

    public function getAltura(): float
    {
        return $this->altura;
    }

    public function setAltura(float $altura): void
    {
        $this->altura = $altura;
    }

    public function getArea(): float
    {
        return $this->getAltura() * $this->getLargura();
    }
}