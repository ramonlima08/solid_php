<?php

namespace App\interfaces;

// use App\componentes\Log;
// use App\componentes\Notificacao;

interface ICadastro {

    //Na primeira parte só temos uma interface, com 3 métodos
    //Porem para satisfazer o Princípio da Segregação de Interface (ISP)
    //Vamos separar os métodos, cada um em sua interface

    public function salvar();

    // public function registrarLog(Log $log);
    // public function enviarNotificacao(Notificacao $notificacao);

}