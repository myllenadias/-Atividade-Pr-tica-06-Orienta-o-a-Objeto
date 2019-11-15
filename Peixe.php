<?php

require_once "Animal.php";

class Peixe extends Animal{

    private $corEscama;

    

    /**
     * Get the value of corEscama
     */ 
    public function getCorEscama()
    {
        return $this->corEscama;
    }

    /**
     * Set the value of corEscama
     *
     * @return  self
     */ 
    public function setCorEscama($corEscama)
    {
        $this->corEscama = $corEscama;

        return $this;
    }

    public function locomover(){

        echo "<p>Nadando</p>";
    }

    public function alimentar(){

        echo "<p>Comendo algas</p>";
    }

    public function emitirSom(){

        echo "<p>Peixe não emite som</p>";
    }

    public function soltarBolha(){

        echo "<p>Soltar bolha</p>";
    }

}