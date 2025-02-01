<!--
    ESTRUTURA IF
a estrutura if checa se uma expressão é verdadeira
podemos incluir operadores lógicos nas expressões

exemplo:    if(expressão){//bloco de código}

-->

<?php 

if(4 > 2){
    echo "exemplo 1 <br>";
}
if(2 > 2){
    echo "exemplo 2 <br>";
}
if(10 > 2){
    echo "exemplo 3 <br>";
}
if(8 > 2){
    echo "exemplo 4 <br>";
}

$name = 'isa';
$nameConfira = 'isa';

if($name === $nameConfira){
    echo 'Usuário existente';
}


?>