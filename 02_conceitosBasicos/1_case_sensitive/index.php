
<!-- 
    CASE SENSITIVITY
significa sensibilidade a casas maiúsculas e minúsculas
para instruções PHP não temos essa diferença, ou seja echo = ECHO ;
porém para variáveis são case sensitive;
ou seja, $nome != $NOME;

-->

<?php

// Não é case sensiive
    echo "teste <br>";
    ecHo "testando 2 <br>";
    ECHO "testando 3 <br>";

// É case sensitive 

    $name = "Kauan";
    $NAME = "ERRO";

    echo $name;
    echo "<br>";
    echo $NAME;