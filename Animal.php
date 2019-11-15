<?php

abstract class Animal{

    private $peso;
    private $idade;
    private $membro;

    abstract function locomover();
    abstract function alimentar();
    abstract function emitirSom();

    public function getPeso()
    {
        return $this->peso;
    }

    /**
     * Set the value of departamento
     *
     * @return  self
     */ 
    public function setPeso($peso)
    {
        $this->peso = $peso;

        return $this;
    }

    public function getIdade()
    {
        return $this->idade;
    }

    /**
     * Set the value of departamento
     *
     * @return  self
     */ 
    public function setIdade($idade)
    {
        $this->idade = $idade;

        return $this;
    }

    public function getMembro()
    {
        return $this->membro;
    }

    /**
     * Set the value of departamento
     *
     * @return  self
     */ 
    public function setMembro($membro)
    {
        $this->membro = $membro;

        return $this;
    }

}