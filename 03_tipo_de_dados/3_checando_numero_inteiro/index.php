<!-- 
    CHECANDO NÚMEROS INTEIROS
podemos validar se um dado é inteiro com a função IS_INT()
caso um número seja inteiro,será retornado true( um outro tipo de dado)
caso não seja, recebemos um retorno de false (tipo de dado também)
precisamos utilizar uma estrutura IF para validar o valor
\
-->

<?php


if(is_int(5)){ //true
    echo "É um inteiro";
}

if(is_int("Não é um inteiro")){ //false
    echo "Erro";
}

$n = 10;

if(is_int($n)){ //false
    echo "É um inteiro";
}