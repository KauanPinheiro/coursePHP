<!-- 
    OPERADOR LÓGICO AND
os operadores lógicos em conjunto dos comparação também 
retornam uma booleano (true ou false)
no caso de and temos true apenas quando as duas comparações são
verdadeiras 

simbolo: &&

ex:     5>2 && 10<100 # true 


-->

<?php 


if( 5>2 && 10<100){
    echo 'A operação é verdadeira <br>';
}

if( 5<2 && 10<100){
    echo 'A operação é falsa <br>';
}

$a = 5; 
$b = 10;
$c = 12;
$d = 12;

if($a < $b && $c == $d){
    echo "Condição verdadeira <br>"; 
}

if($a <= $b && $c >= $d){
    echo "Condição verdadeira 2 <br>"; 
}

?>