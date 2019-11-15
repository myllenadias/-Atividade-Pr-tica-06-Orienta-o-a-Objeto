<?php

class Data{
    private $dia;
    private $mes;
    private $ano;


    public function __construct($dia, $mes, $ano){
        $this->dia = $dia;
        $this->mes = $mes;
        $this->ano = $ano;
    }

    public function getDia()
    {
        return $this->dia;
    }

    /**
     * Set the value of departamento
     *
     * @return  self
     */ 
    public function setDia($dia)
    {
        $this->dia = $dia;

        return $this;
    }

    public function getMes()
    {
        return $this->mes;
    }

    /**
     * Set the value of departamento
     *
     * @return  self
     */ 
    public function setMes($mes)
    {
        $this->mes = $mes;

        return $this;
    }

    public function getAno()
    {
        return $this->ano;
    }

    /**
     * Set the value of departamento
     *
     * @return  self
     */ 
    public function setAno($ano)
    {
        $this->ano = $ano;

        return $this;
    }

    public function getDataAdmissao(){
        return $this->dia . "/" . $this->mes . "/" . $this->ano;
    }

}