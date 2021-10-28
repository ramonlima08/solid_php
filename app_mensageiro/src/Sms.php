<?php

namespace App;


class Sms implements IMensagemToken {

    public function enviar()
    {
        echo 'SMS enviado, seu token é: 888-999';
    }
}