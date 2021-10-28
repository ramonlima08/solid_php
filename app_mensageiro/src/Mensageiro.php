<?php

namespace App;

use App\Email;

class Mensageiro {

    private $canal;

    public function enviarToken(): void
    {
        $classe = 'App\\' . ucfirst($this->getCanal());
        //aqui estamos ferindo o Princípio da Inversão de Dependência (DIP)
        //causando uma dependencia forte do mensageiro com a proxima classe
        $obj = new $classe; //implementações = instancias

        $obj->enviar();
    }

    public function getCanal()
    {
        return $this->canal;
    }

    public function setCanal($canal): void
    {
        $this->canal = $canal;
    }
}