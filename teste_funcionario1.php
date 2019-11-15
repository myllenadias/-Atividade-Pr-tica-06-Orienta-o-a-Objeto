<?php

require_once "Funcionario1.php";
require_once "Data.php";

$data1 = new Data ("14", "02", "1960");
$func = new Funcionario1("Paulo Oliveira", "Informática", "1000", "123.456.789-00", $data1);
echo $func->mostra();