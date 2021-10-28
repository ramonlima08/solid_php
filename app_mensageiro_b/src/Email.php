<?php

namespace App;


class Email implements IMensagemToken {

    private $token;

    public function enviar()
    {
        echo 'E-mail seu token é: '.$this->getToken();
    }

    public function getToken()
    {
        return $this->token;
    }

    public function setToken($token)
    {
        $this->token = $token;
    }
}