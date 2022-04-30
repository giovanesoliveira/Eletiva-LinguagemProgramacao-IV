<?php

class Ponto{

    private $x;
    private $y;
    private static $contador;

    public function __construct($x, $y)
    {
        $this ->setX($x);
        $this->setY($y);
        
    }
    public function getX (){
        return $this->x;
    }

    public static function setContador($contador)
        Self::$contador = $contador;
    }

    public function setX(){
        return $this->x;
    }

    puvlic function getY(){
        return $this->y;
    }

    public function setY(){
        return $this->y;
    }
}