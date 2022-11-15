<?php
include("../model/Numeros2.php");

$dados = $_POST;

//var_dump($dados);

$numeros1 = new Numero($dados['numero'], $dados ['numero2']);

//var_dump($aluno);

echo "A soma é: " . $numeros1->numeros2();