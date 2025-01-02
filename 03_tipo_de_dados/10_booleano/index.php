
<!-- 
    BOOLEANOS
o boolean é um tipo de dado que só possui dois valores
TRUE = verdadeiro
FALSE = falso
alguns valores são considerados como falsos: 0,0.0,"0",[],NULL;
-->

<?php

echo true;
echo "<br>";
echo false;

if(true){
    echo "É verdadeiro <br>";
}

if(5 > 2){ //true
    echo "É verdadeiro <br>";
}

$podeEntrar = true;

if($podeEntrar){
    echo "O usuário pode entrar";
}