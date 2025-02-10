<!-- 
    LOOP DENTRO DE LOOP
como nas estruturas de if, podemos adicionar um loop
dentro de outro 
o contador deve ser único, para que um loop não afete o outro
o loop interno será executado tantas vezes quanto o loop externo for 
e em cada uma das execuções, serão passadas todas as suas 
etapas 


-->

<?php

$i = 0;

while($i < 10){
    echo "Loop externo $i <br>";

    //segundo loop

$j = 1;

        while($j <= 5){
            echo "Loop interno $j <br>";
            $j++;
        }

    $i++;
}




?>