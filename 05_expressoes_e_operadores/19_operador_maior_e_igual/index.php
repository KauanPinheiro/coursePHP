<!-- 
    OPERADOR MAIOR E MAIOR IGUAL
com o operador maior que vereficamos se um valor é maior
que outro

o símbolo é: >

exemplo: 5 > 4 #true

com o operador maior ou igual a verificamos se um valor é ou igual a outro

o símbolo é:  >=

exemplo: 5 >= 5 #true 


-->

<?php 

    $a = 4;
    $b = 5;
    $c = 6;
    
    if($b >= $a){
        echo "Caso 1 é maior <br>";
    }
    
    if($b >= $c){
        echo "Caso 2 é maior <br>";
    }
    
    if($a >= $c){
        echo "Caso 3 é maior <br>";
    }
    
    ?>