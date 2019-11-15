<?php 
class Mensagem {
public $mensagem;
public function __construct($nome)
{
$this->mensagem = $nome;
}
}
$minhamensagem = new Mensagem("Paulo");
echo "Olá, eu sou " . $minhamensagem->mensagem;
?>
