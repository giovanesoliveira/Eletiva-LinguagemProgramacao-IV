<?php

class Impressora {
    
    private $marca;
    private $modelo;
    private $colorida;
    private $peso;

    public function getMarca(){
        return $this->marca;
    }


    public function setMarca($marca){
        $this->marca = $marca;
    }
}