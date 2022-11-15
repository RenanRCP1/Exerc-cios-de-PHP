<?php

class Numero{
    // public $nome;
    public $numero1;
    public $numero2;


    //seria aplicar o nome mais amigável para os parâmetros
    function __construct($numero1, $numero2){
        $this->numero1 = $numero1;
        $this->numero2 = $numero2;
    }

        function numeros2(){
        return $this->numero1 + $this->numero2;

    }

    function add(){
        return "Salvo!";
    }

}