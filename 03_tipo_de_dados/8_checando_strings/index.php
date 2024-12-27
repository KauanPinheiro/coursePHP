<!-- 
        CHECANDO SE É STRING
podemos ultilizar a função IS_STRING() para verificar se um dado é uma string
a função recebe um valor como parâmetro
novamente receberemos true or false, dependendo do dado enviado
precisamos utilizar uma estrutura IF para validar o valor

-->

<?php


$str = " Kauan";
$n = 12;

if(is_string($str)){
    echo "$str é uma string <br>";
}

if(is_string($n)){
    echo "$n é uma string <br>";
}

if(is_string('Laura')){
    echo "é uma string <br>";
}
