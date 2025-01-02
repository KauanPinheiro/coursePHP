<!-- 
    EXERCÍCIO 7
crie um arquivo PHP
crie um array associativo com características de uma pessoa 
desafio: faça um IF checando se ela é maior de idade e imprima uma 
mensagem, caso seja:


-->

<?php

$pessoa = [
    'nome' => 'Isabela Costa',
    'altura' => 1.75,
    'idade' => 21

];

$idade = $pessoa['idade'];
$nome = $pessoa['nome'];

if($idade >= 18){
    echo "$nome é maior de idade";  
}else{
    echo "$nome não é maior de idade";
}

