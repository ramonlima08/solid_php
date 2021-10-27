<?php

namespace App;

class CarrinhoCompra
{
    //atributos
    private $itens;
    private $status;
    private $valorTotal;

    //métodos
    public function __construct()
    {
        $this->itens = [];
        $this->status = 'aberto';
        $this->valorTotal = 0;
    }

    public function exibirItens()
    {
        return $this->itens;
    }

    public function intemValido(string $item, float $valor)
    {
        if($item == '') {
            return false;
        }
        if($valor <= 0) {
            return false;
        }
        return true;
    }

    public function adicionarItem(string $item, float $valor)
    {
        if ($this->intemValido($item, $valor)) {        
            array_push($this->itens, ["item" => $item, "valor" => $valor]);
            $this->valorTotal += $valor;
            return true;
        }
    }

    public function exibirValortotal()
    {
        return $this->valorTotal;
    }

    public function exibirStatus()
    {
        return $this->status;
    }

    public function confirmarPedido()
    {
        if( $this->validarCarrinho() ) {
            $this->status = 'confirmado';
            $this->enviarEmailConfirmacao();
            return true;
        }
        return false;
    }

    public function enviarEmailConfirmacao()
    {
        echo '<br/>.. e-mail de confirmação enviado ..<br/>';
        return true;
    }

    public function validarCarrinho()
    {
        return count($this->itens) > 0;
    }
    
}