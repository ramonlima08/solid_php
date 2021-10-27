<?php

require __DIR__."/vendor/autoload.php";

use App\CarrinhoCompra;

$carrinho1 = new CarrinhoCompra();

echo '<h3>Sem SRP</h3>';

echo 'Carrinho';
echo '<pre>';
print_r($carrinho1->exibirItens());
echo '</pre>';

echo 'Valor Total: '.$carrinho1->exibirValortotal();
echo '<br/>';
echo 'Add Itens';
echo '<br/>';

// $carrinho1->adicionarItem("Bicicleta",750.58);
// $carrinho1->adicionarItem("Geladeira",1949.99);
// $carrinho1->adicionarItem("Tapete",198.30);

echo '<br/>';
echo 'Carrinho atualizado:';
echo '<pre>';
print_r($carrinho1->exibirItens());
echo '</pre>';

echo 'Status: '.$carrinho1->exibirStatus();
echo '<br/>';

echo 'Valor Total: '.$carrinho1->exibirValortotal();
echo '<br/>';

if( $carrinho1->confirmarPedido() ) {
    echo 'Pedido Realizado com sucesso!';
}else{
    echo 'Erro ao confirmar o pedido. Seu carrinho está vazio';
}

echo '<br/>';
echo 'Status: '.$carrinho1->exibirStatus();