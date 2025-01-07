<!-- 
    Variável por referência
podemos criar uma variável com referência a outra
o símbolo é =&
se mudamos a variável de referência a referenciada muda o valor ao 
contrário também gera mudança

$x = 2;
$y =& $x;

-->

<?php

$x = 10;

$y =& $x;

echo $x;
echo "<br>";
echo $y;
echo "<br>";

$y = 15;

echo "Atribuição após ref";
echo "<br>";
echo $x;
echo "<br>";
echo $y;
echo "<br>";

$y = 25;

echo "Atribuição após ref";
echo "<br>";
echo $x;
echo "<br>";
echo $y;

