<!-- 
    EXERCÍCIO 28
crie um loop que vai até o número 30
o contador deve iniciar como 4
faça incrementos em 2 em 2 no contador 
utilizae o brak para parar o loop quando chegar 
no número 24

-->

<?php 

$x = 4;

while($x <= 30){
    echo "$x <br>";

    if($x === 24){
        echo "<br>";
        break;
    }


    $x = $x + 2;

}

?>