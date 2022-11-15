<?php

class Numero{
    // public $nome;
    public $numero1;


    //seria aplicar o nome mais amigável para os parâmetros
    function __construct($numero1){
        $this->numero1 = $numero1;
    }

        function numero(){
        return $this->numero1;
    }

    function add(){
        return "Salvo!";
    }

}
