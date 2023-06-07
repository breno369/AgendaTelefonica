<?php

class Agenda{
    private $Agenda = [];

    public function addAgenda($contato){
        $this -> Agenda[$contato -> getNome()] = $contato->getTel();
    }

    public function getAgenda($nome){
        $this -> Agenda[$nome];
    }
}

?>