<!-- 
    A INTRUÇÃO CONTINUE
o continue pula uma execução do loop
ou seja, quando o interpretador encontrar esta instrução,
a próxima etapa do loop será executada 
novamente costumamos aplicar dentro de uma estrutura
de condição


-->

<?php 

    $a = 10;

    while($a > 0){

        if($a == 5 || $a == 7){
            echo "Pulou a execução $a <br>";
                $a--;
                    continue;
        }
        echo "Executando o loop $a <br>";

        $a-- ;  
    }


?>