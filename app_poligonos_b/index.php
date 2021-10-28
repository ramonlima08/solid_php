<?php

require __DIR__.'/vendor/autoload.php';

use App\Poligono;
use App\poligonos\Retangulo;
use App\poligonos\Quadrado;

//Montar um Retangulo
$poligono = new Poligono();
$poligono->setForma(new Retangulo());
$poligono->getForma()->setLargura(5);
$poligono->getForma()->setAltura(10);
echo '<pre>';
print_r($poligono);
echo '</pre>';

echo '<h3>Área do retângulo: '.$poligono->getArea().' </h3>';

//Montar um quadrado
$poligono = new Poligono();
$poligono->setForma(new Quadrado());
$poligono->getForma()->setLargura(5);
echo '<pre>';
print_r($poligono);
echo '</pre>';

echo '<h3>Área do quadrado: '.$poligono->getArea().' </h3>';