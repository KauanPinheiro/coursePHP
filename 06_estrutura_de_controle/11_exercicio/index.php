<!-- 
    EXERCÍCIO 26
crie uma variável que recebe uma velocidade de uma carro
depois crie uma estrutura if que verifica essa velocidade 
se a velocidade for menor que 40, imprima que o motorista na 
velocidade correta 

se igual a 40, imprima uma mensagem para o motorista tomar cuidado
se for maior, imprima uma mensagem de multa 

-->


<?php 

$velocidade = 41;

if($velocidade < 40){
    echo 'motorista está na velocidade correta <br>';
}else if($velocidade == 40){
    echo 'motorista tome cuidado';
}else if($velocidade > 40){
    echo 'Multa ! <br>';
}




?>