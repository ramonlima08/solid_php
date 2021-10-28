<?php

require __DIR__.'/vendor/autoload.php';

use App\Mensageiro;
use App\Email;
use App\Sms;
use App\Whatsapp;


//---- canal e-mail
$email = new Email();
$email->setToken("111-999");
$msg = new Mensageiro($email); //isso aqui é injeção de Dependencia
$msg->enviarToken();


echo "<br/>";

//---- canal e-mail
$sms = new Mensageiro(new Sms()); //isso aqui é injeção de Dependencia
$sms->enviarToken();

echo "<br/>";

//---- canal e-mail
$sms = new Mensageiro(new Whatsapp()); //isso aqui é injeção de Dependencia
$sms->enviarToken();

