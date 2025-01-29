<!-- 
    OPERADORES DE CONVERSÃO (CAST)
com os operadores de conversão podemos forçar uma variável ser de 
um determinado tipo

nem todos são úteis, os mais utilizados são para converter
uma string em número 

operadores: int,bool,float,string,object a unset

exemplo: $a = (float) "5.34243 #string é convertida para float

-->

<?php  

$a = (int) "12";

echo $a;
echo "<br>";

echo $a + 10;

?>