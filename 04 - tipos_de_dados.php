<?php
    //String
    $nome = "Olá, Mundo!";
    var_dump($nome); //função que mostra informações sobre a variável
    if (is_string($nome)): //verifica se é String
        echo "É uma String! <br> "; 
        echo gettype($nome);  // mostra o tipo de dado da variável
    else:
        echo "Não é uma String! <br>";
        echo gettype($nome); // mostra o tipo de dado da variável
    endif;

    echo "<hr>";

    //Int
    $idade = 27;
    echo "<br> $idade <br>";
    var_dump($idade);
    if (is_int($idade)):
        echo "É um inteiro";
    else:
        echo "Não é um inteiro";
    endif;    
    
    echo "<hr>";

    //Float
    $altura = 1.78;
    var_dump($altura);
    if (is_float($altura)):
        echo "É um float";
    else:
        echo "Não é um float";
    endif;

    echo "<hr>";
    
    //Boolean
    $admin = false;
    var_dump($admin);
    if (is_bool($admin)):
        echo "É verdadeiro";
    else:
        echo "É falso";
    endif;    
        


?>        