<?php

require __DIR__.'/vendor/autoload.php';

use App\dao\ContratoModel;
use App\dao\LeadModel;
use App\dao\UsuarioModel;


$contratoModel = new ContratoModel();
echo '<pre>';
print_r($contratoModel);
echo '</pre>';


$leadModel = new LeadModel();
echo '<pre>';
print_r($leadModel);
echo '</pre>';

$usuarioModel = new UsuarioModel();
echo '<pre>';
print_r($usuarioModel);
echo '</pre>';