<!-- 
    VARIÁVEL ESTÁTICA
a variável estática é declarada com a instrução static
o valor da mesma é mantido e alterado a cada execução de uma função 
é interessante este comportamento pois as variáveis de escopo local
sempre são resetadas 

-->

<?php

    function teste (){

        $a = 0;
        $a ++;

        echo "$a <br>";
    }


    teste();
    teste();
    teste();

    function testeStatic (){
        
        static $a = 0;
        $a++;

        echo "$a <br>";
    }

    testeStatic();
    testeStatic();
    testeStatic();
    testeStatic();