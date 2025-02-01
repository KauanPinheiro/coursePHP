<!-- 
    OPERADORES DE ATRIBUIÇÃO
com estes operadores podemos atribui valor a uma varaável
o mais conhecido é o = , porém temos algumas variações do mesmo
operadores: +=, -=. *=  e   %=

cada um destes fará uma operação antes da atribuição



-->

<?php 

    $a = 0;
    $a += 10; //$a = $a + 10  
    
    echo $a . "<br>";
    
    $a = 0;
    $a -= 10; //$a = $a - 10  
    
    echo $a . "<br>";
    
    $a = 0;
    $a *= 10; //$a = $a * 10  
    
    echo $a . "<br>";

    $a = 0;
    $a %= 10; //$a = $a % 10  
    
    echo $a . "<br>";

    $b = 20;
    $c = 20;

    if($b += $c /* $b = $b + $c */){
        echo $b . "<br>";
    }




?>