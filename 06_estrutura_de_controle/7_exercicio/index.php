<!-- 
    EXERCÍCIO 24b
crie uma variável que recebe um peso
caso seja maior que 80
imprima a mensagem que está pesado demais 

se não. imprima 'Peso dentro do limite '



-->


<?php 
        $peso = 72.2;
        $mediaPeso = 80;

        if($peso > $mediaPeso){
            echo 'Está pesado demais';
        }else{
            echo 'Peso dentro do limite';
        }



?>