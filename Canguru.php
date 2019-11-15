<?php

require_once "Mamifero2.php";

class Canguru extends Mamifero2{

    public function usarBolsa(){

        echo "<p>Carregar filhote na bolsa</p>";
    }

    public function locomover(){

        echo "<p>Pular bem alto</p>";
    }
}