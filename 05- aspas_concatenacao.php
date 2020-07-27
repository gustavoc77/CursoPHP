<?php
    $nome = 'Gustavo da Costa'; //aspas simples são literais(não são interpretadas)
    echo $nome. "<hr>";
    echo 'Meu nome é ' .$nome. ' e tenho 19 anos <br>'; //utiliza-se o ponto para concatenação com as aspas simples
    echo 'Meu nome é ' .$nome. ' e tenho \'19\' anos <hr>'; 

    echo "Meu nome é $nome <br>"; //aspas duplas interpretam as variáveis
    echo "Meu nome é \'$nome\'";
?>