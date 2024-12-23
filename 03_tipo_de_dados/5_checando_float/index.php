<!-- 
    CHECANDO SE É FLOAT
podemos utilizar a função IS_FLOAT() para verificar se um dado é um float
a função recebe um valor como parêmetro 
novamente receberemos TRUE or FALSE, dependendo do dado enviado
precisamos utilizar uma estrutura IF para validar o valor

-->

<?php

$x = "test";
$y = 12.5;
$z = 5;

if(is_float($x)){
    echo "É float 1 <br>";
}

if(is_float($y)){
    echo "É float 2 <br>";
}
if(is_float($z)){
    echo "É float 3 <br>";
}

if(is_float(2.3434343)){
    echo "É float 4 <br>";
}