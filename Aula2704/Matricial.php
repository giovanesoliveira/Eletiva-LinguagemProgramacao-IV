<?php

class Matricial extends Impressora {
    private $numAgulhas;
    private $imprimeVias;

    public function __construct($marca, $modelo, $numAgulhas, 
            $colorida, $imprimeVias, $peso)
    {
        $this->marca = $marca;
    }

    public function getNumAgulhas(){
        return $this->numAgulhas;
    }

    public function setNumAgulhas($numAgulhas){
        $this->numAgulhas = $numAgulhas;
    }

    public function imprimeVias(){
        return $this->imprimeVias;
    }

    public function setImprimeVias($imprimeVias){
        $this->imprimeViass = $imprimeVias;
    }
}