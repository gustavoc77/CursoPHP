<?php
    define("Nome", "Gustavo da Costa"); //definindo constante
    define("Idade", 19);
    define("Altura", 1.78);
    define("Casado", false);

    define("TIMES", ['Corinthians', 'Flamengo', 'Santos', 'São Paulo']);
    
    echo "Me chamo ".Nome. ", tenho ".Altura. " de altura ";
    echo "<hr>";

    echo TIMES[0]. "<br>";
    var_dump(TIMES);

    function exibeNome(){
        echo Nome; //as constantes são automaticamente globais
    }

    echo "<hr>"; exibeNome();

?>