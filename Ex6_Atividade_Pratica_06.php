<?php
class Pessoa {
	private $nome;
	private $idade;

	public function getNome(){
		return $this->nome;
	}

	public function setNome($nome){
		$this->nome = $nome;
		return $this;
	}

	public function getIdade(){
		return $this->idade;
	}

	public function setIdade($idade){
    $this->idade = $idade;
	return $this;
	}

	public function fazNiver($contador){
		$this->idade += $contador;
	}

	public function imprimeIdade(){
	return "Parabéns, " . $this->getNome() . ". Você está de aniversário e está fazendo " . $this->getIdade() . " anos!";
	}
}

$pessoa = new Pessoa();
$pessoa->setNome("Paulo");
$pessoa->setIdade(59);
$pessoa->fazNiver(1);
echo $pessoa->imprimeIdade();

?>
