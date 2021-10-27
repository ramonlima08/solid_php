<?php

require __DIR__."/vendor/autoload.php";

use App\Leitor;

//----------------------- TXT
$leitorTxt = new Leitor();
$leitorTxt->setDiretorio(__DIR__."/arquivos");
$leitorTxt->setArquivo("dados.txt");
$arr_txt = $leitorTxt->lerArquivo();

//----------------------- CSV
$leitorCsv = new Leitor();
$leitorCsv->setDiretorio(__DIR__."/arquivos");
$leitorCsv->setArquivo("dados.csv");
$arr_csv = $leitorCsv->lerArquivo();

//---------------------- Merge entre resultado Txt e CSV
echo '<h4>Dados dos Arquivos</h4>';
echo '<pre>';
print_r(array_merge($arr_txt, $arr_csv));
echo '</pre>';
