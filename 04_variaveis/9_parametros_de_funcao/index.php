<!-- 
    PARÂMETRO DE FUNÇÃO
os parâmetros de função também são considerados tipos de variáveis 
este recurso nos ajuda a criar funções com valores dinãmicos 
podendo alterá-los a cada invocação da mesma 
podemos passar mais de um parãmetro para uma função

-->

<?php

    function soma($a, $b){

        echo $a + $b;
        echo"<br>";
    }

    soma(2,4);
    soma(9,100);
    soma(1,3);