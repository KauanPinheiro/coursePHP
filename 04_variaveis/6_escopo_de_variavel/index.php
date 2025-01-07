<!--
    ESCOPO
como em outras linguagens em PHP também temos escopo de variáveis

local: variável declarada em uma função

global: variável declaradas fora de funções

static: variáveis declarada dentro de função, porém o seu valor permanece 
salvo entre chamadas da função

parãmetros de função: variáveis passadas para uma função, podendo 
ser utilizada ao logo da mesma 

-->
<?php

    
    $x = 10; 
    echo "$x global <br>";

    function teste(){

        $x = 5;
        echo " $x Local <br>";
    }

    teste();