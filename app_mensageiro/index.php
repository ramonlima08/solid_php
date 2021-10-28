<?php

require __DIR__.'/vendor/autoload.php';

use App\Mensageiro;

//---- canal e-mail
$msg = new Mensageiro();
$msg->setCanal('email');
$msg->enviarToken();


echo "<br/>";

//---- canal e-mail
$sms = new Mensageiro();
$sms->setCanal('sms');
$sms->enviarToken();