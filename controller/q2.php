<?php
include("../model/Numeros.php");

$dados = $_POST;

//var_dump($dados);

$numero1 = new Numero($dados['numero']);

//var_dump($aluno);

echo "O numero é: " . $numero1->numero();
