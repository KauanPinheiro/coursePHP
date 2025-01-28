<!-- 
    OPERADOR MENOR E MENOR IGUAL 
com o operador menor que veredicamos se um valor é
menor que outro

o símbolo é: <

exemplo: 5 < 4 #false

com o operador menor ou igual a verificamos se um valor é menor ou 
igual a outro

o símbolo é:  <=

exemplo: 11 <= 12 #true


-->

<?php 

    $a = 10;
    $b = 12;
    $c = 5;
    $d = 15;

    if($a <= $b){
        echo "Caso 1 de certo <br>";
    }
    if($b <= $c){
        echo "Caso 2 de certo <br>";
    } 
    if($c <= $d){
        echo "Caso 3 de certo <br>";
    }
    if($a <= $d){
        echo "Caso 4 de certo <br>";
    }

?>