<!-- 
    EXERCÍCIO 34
crie uma função que verifica se um número é par ou impar
se for par imprima uma mensagem 
se for ímpar imprima uma mensagem


-->


<?php 


function validar($n){
    
    if($n % 2 == 0){
        echo "O $n é par <br>";
    }elseif($n % 2 == 1){
        echo "O $n é ímpar <br>";
    }
}

validar(2);
validar(1);
validar(10);
validar(13);


?>