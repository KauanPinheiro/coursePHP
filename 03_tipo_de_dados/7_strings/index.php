

<!-- 
    TEXTOS(STRINGS)
os textos são conhecidos como strings
em PHP podemos escrever textos em aspas simples ou duplas, não há
diferença para texto puro
as as aspas duplas interpretam variáveis;

-->

<?php

echo "testando texto com aspas duplas <br>";
echo 'testando texto com aspas simples <br>';

$age = 16;
$name = "Laura";

// aspas duplas ele imprime uma variável com valor 
echo "She has $age years old, your name is $name <br>";


// aspas simples não imprime uma váriavel com valor 
echo 'She has $age years old, your name is $name <br>';