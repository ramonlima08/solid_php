<?php

require __DIR__."/vendor/autoload.php";

use App\Item;
use App\Pedido;
use App\EmailService;

echo '<h3>COM o SRP</h3>';


$pedido = new Pedido();
//------------------------------
$item1 = new Item();
$item2 = new Item();

$item1->setDescricao('Bicicleta');
$item1->setValor(749.99);

$item2->setDescricao('Lâmpada');
$item2->setValor(9.33);
//------------------------------
echo '<h4>Pedido Iniciado</h4>';
echo '<pre>';
print_r($pedido);
echo '</pre>';
//------------------------------
$pedido->getCarrinhoCompra()->adicionarItem($item1);
$pedido->getCarrinhoCompra()->adicionarItem($item2);
//------------------------------
echo '<h4>Pedido com Itens</h4>';
echo '<pre>';
print_r($pedido);
echo '</pre>';
//------------------------------

//------------------------------
echo '<h4>Itens do Carrinho</h4>';
echo '<pre>';
print_r($pedido->getCarrinhoCompra()->getItens());
echo '</pre>';
//------------------------------

//------------------------------
echo '<h4>Valor do Pedido</h4>';
$valor = 0;
foreach( $pedido->getCarrinhoCompra()->getItens() as $k => $value) {
    $valor += $value->getValor();
}
echo $valor;
//------------------------------

//------------------------------
echo '<h4>O Carrinho está valido?</h4>';
var_dump($pedido->getCarrinhoCompra()->validarCarrinho());
//------------------------------

//------------------------------
echo '<h4>Status do pedido</h4>';
echo $pedido->getStatus();
//------------------------------
//------------------------------
echo '<h4>Confirmar do pedido</h4>';
var_dump($pedido->confirmar());
echo $pedido->getStatus();
//------------------------------
echo '<h4>Envio de e-mail</h4>';
if($pedido->getStatus() == 'confirmado'){
    echo EmailService::disparaEmail();
}

// echo 'Carrinho';
// echo '<pre>';
// print_r($carrinho1->exibirItens());
// echo '</pre>';

// echo 'Valor Total: '.$carrinho1->exibirValortotal();
// echo '<br/>';
// echo 'Add Itens';
// echo '<br/>';

// $carrinho1->adicionarItem("Bicicleta",750.58);
// $carrinho1->adicionarItem("Geladeira",1949.99);
// $carrinho1->adicionarItem("Tapete",198.30);

// echo '<br/>';
// echo 'Carrinho atualizado:';
// echo '<pre>';
// print_r($carrinho1->exibirItens());
// echo '</pre>';

// echo 'Status: '.$carrinho1->exibirStatus();
// echo '<br/>';

// echo 'Valor Total: '.$carrinho1->exibirValortotal();
// echo '<br/>';

// if( $carrinho1->confirmarPedido() ) {
//     echo 'Pedido Realizado com sucesso!';
// }else{
//     echo 'Erro ao confirmar o pedido. Seu carrinho está vazio';
// }

// echo '<br/>';
// echo 'Status: '.$carrinho1->exibirStatus();