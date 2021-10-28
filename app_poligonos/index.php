<?php

require __DIR__.'/vendor/autoload.php';

use App\Retangulo;
use App\Quadrado;

$retangulo = new Retangulo();
$retangulo->setAltura(5);
$retangulo->setLargura(10);
echo '<h3>Área do retangulo: '.$retangulo->getArea().' </h3>';

$quadrado = new Quadrado();
$quadrado->setAltura(5);
echo '<h3>Área do quadrado: '.$quadrado->getArea().' </h3>';

//Aqui deveriamos conseguir criar um Retangulo utilizando a Calsse Quadrado
//Mais não pode pq os métodos do quadrado.
$retangulo = new Quadrado();
$retangulo->setAltura(5);
$retangulo->setLargura(10);
echo '<h3>Área do retangulo: '.$retangulo->getArea().' </h3>';