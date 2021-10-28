<?php

namespace App;

use App\IMensagemToken;
use App\Email;

class Mensageiro {
    
    //canal agora é um objeto, vai poder ser Sms/Email/Qualquer outro método q implemente IMensagemToken
    private $canal; 

    //No Index é enviado a Classe Emial ou Sms
    //Mais aqui se espera a implementação, isso vai obrigar a classe que chegar
    //Que tenha o método que é obrigado pela classe de Implementação
    public function __construct(IMensagemToken $canal)
    {
        $this->setCanal($canal);
    }

    public function enviarToken(): void
    {
        $this->getCanal()->enviar();
    }

    public function getCanal(): IMensagemToken
    {
        return $this->canal;
    }

    public function setCanal(IMensagemToken $canal): void
    {
        $this->canal = $canal;
    }
}