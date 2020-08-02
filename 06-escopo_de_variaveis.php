<?php
//ESCOPO GLOBAL
    $nome = "Gustavo Costa";
    $a = 1;
    $b = 3;
    $c = 7;

    function exibeNome(){
        //ESCOPO LOCAL
        global $nome; //define a variável nome como global
        echo $nome;
    }
    exibeNome();

    echo "<hr>";

    function exibeCidade(){
        global $cidade;
        $cidade = "São Paulo";
    }

    exibeCidade();
    echo $cidade;

    echo "<hr>";

    function soma(){
        echo $GLOBALS['a'] + $GLOBALS['b'] + $GLOBALS['c']; //array associativo para declarar N variáveis como globais
    }

    soma();

?>