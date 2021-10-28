<?php

namespace App;


class Whatsapp implements IMensagemToken {

    public function enviar()
    {
        echo 'Whatsapp enviado, seu token é: 123-456';
    }
}