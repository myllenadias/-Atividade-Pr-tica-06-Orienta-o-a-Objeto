<?php

require_once "Animal.php";

class Mamifero extends Animal{

    private $corPelo;
    

    /**
     * Get the value of corPelo
     */ 
    public function getCorPelo()
    {
        return $this->corPelo;
    }

    /**
     * Set the value of corPelo
     *
     * @return  self
     */ 
    public function setCorPelo($corPelo)
    {
        $this->corPelo = $corPelo;

        return $this;
    }

    public function locomover(){
        
        echo "<p>Correndo</p>";
    }

    public function alimentar(){

        echo "<p>Mamando</p>";
    }

    public function emitirSom(){

        echo "<p>Som de mamífero</p>";
    }
}