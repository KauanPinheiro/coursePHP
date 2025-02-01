<!-- 
    IF ANINHADO
podemos também inserir um if dentro de outro
neste caso o segundo bloco precisa apenas ficar dentro
do primeiro if

exemplo:


if(exp){

    if(EXP){
    }

}


-->


<?php 

    if(5 > 2){

        echo "condição verdadeira <br>";

        if('teste' == 'teste'){
            echo 'entrou no segundo if <br>';
        }

    }



?>