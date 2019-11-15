<?php

class MinhaCalculadora{
	private $val1, $val2;

public function __construct( $num1, $num2 ) {
		$this->val1 = $num1;
$this->val2 = $num2;
}

public function somar() {
		return $this->val1 + $this->val2;
}

public function subtrair() {
		return $this->val1 - $this->val2;
}


public function multiplicar() {
		return $this->val1 * $this->val2;
}


public function dividir() {
		return $this->val1 / $this->val2;
}
}

$minhacalc = new MinhaCalculadora(12, 6);
echo $minhacalc->somar()."\n";
echo $minhacalc->multiplicar()."\n";
echo $minhacalc->subtrair()."\n";
echo $minhacalc->dividir()."\n";
?>
