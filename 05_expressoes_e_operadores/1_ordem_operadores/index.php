<!-- 
    ORDEM DOS OPERADORES

o PHP e as linguagens de progrmação executam os operadores na
mesma ordem que na matemática 

ou seja em: 2 + 2 * 4, teremos o resultado de 10

pois a multiplicação é avaliada antes da soma 
mesmo que a primeira operação seja soma 
podemos utilizar () para separar operações 

-->

<?php

echo 3 + 2 * 5;
echo "<br>";

echo (3 + 2) * 5;
echo "<br>";

echo 5 + 2 /10;
echo "<br>";

$a = 5;
$b = 2;
$c = 10;

echo $a + $b/$c;
echo "<br>";

$d = $a * $b * $c;

echo $d;
echo "<br>";