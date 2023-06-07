<?php

  class Contato{
    private $Nome;
    private $Tel;


    public function setNome($valor){
        $this->Nome = $valor;
    }
  
    public function getNome(){
        return $this->Nome;
    }
       
    public function setTel($valor){
        $this->Tel = $valor;
    }
  
    public function getTel(){
        return $this->Tel;
    }
    
}

?>