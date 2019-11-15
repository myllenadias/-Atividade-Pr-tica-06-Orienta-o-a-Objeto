<?php

require_once "Data.php";

class Funcionario1{
    
    private $nome;
    private $departamento;
    private $salario;
    private $dataAdmissao;
    private $CPF;

    public function __construct($nome, $departamento, $salario, $CPF, Data $data1){
        $this->nome = $nome;
        $this->departamento = $departamento;
        $this->salario = $salario;
        $this->dataAdmissao = $data1->getDataAdmissao();
        $this->CPF = $CPF;
    }

    /**
     * Get the value of nome
     */ 
    public function getNome()
    {
        return $this->nome;
    }

    /**
     * Set the value of nome
     *Funcionario
     *Funcionario
     *Funcionario
    puFuncionario
    {
      Funcionario

        return $this;
    }

    /**
     * Get the value of departamento
     */ 
    public function getDepartamento()
    {
        return $this->departamento;
    }

    /**
     * Set the value of departamento
     *
     * @return  self
     */ 
    public function setDepartamento($departamento)
    {
        $this->departamento = $departamento;

        return $this;
    }

    /**
     * Get the value of salario
     */ 
    public function getSalario()
    {
        return $this->salario;
    }

    /**
     * Set the value of salario
     *
     * @return  self
     */ 
    public function setSalario($salario)
    {
        $this->salario = $salario;

        return $this;
    }

    /**
     * Get the value of dataAdmissao
     */ 
    public function getDataAdmissao()
    {
        return $this->dataAdmissao;
    }

    /**
     * Set the value of dataAdmissao
     *
     * @return  self
     */ 
    public function setDataAdmissao($dataAdmissao)
    {
        $this->dataAdmissao = $dataAdmissao;

        return $this;
    }

    /**
     * Get the value of CPF
     */ 
    public function getCPF()
    {
        return $this->CPF;
    }

    /**
     * Set the value of CPF
     *
     * @return  self
     */ 
    public function setCPF($CPF)
    {
        $this->CPF = $CPF;

        return $this;
    }

    public function recebeAumento(){
        $this->salario = $this->salario *1.1;
    }

    public function calcGanhoAnual(){
        return $this->salario *12;
    }

    public function mostra(){
        echo $this->getNome() . " trabalha no Departamento" . $this->getDepartamento() . " desde " . $this->getDataAdmissao() . "possui salário de " . $this->getSalario();
    }

    public function __toString(){
        echo $this->getNome() . " trabalha no Departamento" . $this->getDepartamento() . " desde " . $this->getDataAdmissao() . "possui salário de " . $this->getSalario();
    }


}

?>