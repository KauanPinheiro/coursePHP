<!-- 
    VARIÁVEL GLOBAL
a principal caractéristica da variável global é ser declarada fora de 
funções
por comportamento padrão não são acessiveis dentro de funções
precisamos utilizar a palavra GLOBAL para isso
essa função de variável global não ser acessível dentro de funções 
previne muitos problemas no software


-->

<?php

$teste = "asd";
echo "$teste global 1 <br>";


if( 5 > 2){
    $teste = "dsa";
    echo "$teste global 2 <br>";

}

function funcao(){

    $teste = "xdxd";

    echo "$teste global 3 <br>";

}

funcao();


$teste = 2;

function testandoglobal(){

    global $teste;

    echo "$teste global  <br>";

}

testandoglobal();