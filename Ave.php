<?php

require_once "Animal.php";

class Ave extends Animal{

    private $corPena;

    

    /**
     * Get the value of corPena
     */ 
    public function getCorPena()
    {
        return $this->corPena;
    }

    /**
     * Set the value of corPena
     *
     * @return  self
     */ 
    public function setCorPena($corPena)
    {
        $this->corPena = $corPena;

        return $this;
    }

    public function locomover(){

        echo "<p>Voando</p>";
    }

    public function alimentar(){

        echo "<p>Comendo sementes</p>";
    }

    public function emitirSom(){

        echo "<p>Som de ave</p>";
    }

    public function fazerNinho(){
        
        echo "<p>Fazer ninho</p>";
    }
}