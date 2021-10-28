<?php

namespace App;


class Email implements IMensagemToken {

    public function enviar()
    {
        echo 'E-mail seu token é: 521-698';
    }
}