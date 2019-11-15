<?php

require_once "Funcionario.php";

$func1 = new Funcionario ("Paulo Oliveira", "informática", 1000, "19/01/2018", "987-567-345-99");

$func1->recebeAumento();
echo $func1->getNome() . "trabalha no departamento " . $func1->getDepartamento();

echo "<br> <br>";

$func2 = new Funcionario( "Luke Skywalker" , "Star Wars" , 5000, "19/12/1977", "999-888-777-66");

$func2->recebeAumento();
echo $func2->getNome() . "trabalha no Departamento " . $func2->getDepartamento;

echo "<br> <br>";

$func3 = new Funcionario("Han Solo", "Star Wars", 7000, "19/12/1977", "555-444-333-22");
$func3->mostra();

echo "<br> <br>";

$func4 = new Funcionario ("Leia Organa", "Star Wars", 8000, "19/12/1977", "000-111-222-33");
echo $func4;

