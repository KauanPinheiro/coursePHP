<!-- 
    EXERCÍCIO 4 
crie um arquivo PHP
imprima três floats
ultilizando a função IS_FLOAT em um deles

-->

<?php

$a =  12.5;
$b = 12.50;
$c = 12.500;

echo "$a e $b são floats";
echo "<br>";

if(is_float($c)){
    echo "$c é um float, exercício concluido";
}