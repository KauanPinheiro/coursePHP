<!-- 
    CHECANDO SE É BOOLEANO
poodemos utilizar a função IS_BOOELAN() para verificar se um dado é
boolean
a função recebe um valor como parãmetro
novamente receberemos TRUE or FALSE, dependendo do dado enviado 
precisamos utilizar uma estrutura IF para validar o valor

-->


<?php


$check = true;

if(is_bool($check)){
    echo "A variavel é booleano <br>";
}

if(is_bool(0 == false)){
    echo "é booleano 2 <br>";
}

if(is_bool(1 == true)){
    echo "é booleano 3 <br>";
}

if(is_bool(false)){
    echo "é booleano 4 <br>";
}

if(is_bool(0.0 == false)){
    echo "é booleano 5 <br>";
}