<!-- 
    VARIAVEL DE VARIAVEL
podemos criar uma variavel por meio do nome de outra variavel 
com um valor diferente
o simbolo para esta função pe o $$

exemplo:

    $x = "teste";
    $$x = 5;

apos a execução do código, a variavel teste(contéudo de $x),
será criada com o valor 5;

-->

<?php

$x = "nome"; //Valor de nome 

echo "$x <br>";

$$x = "Isabela"; // var com o nome de x (nome ), com valor de Isabela 

echo "$nome <br>";