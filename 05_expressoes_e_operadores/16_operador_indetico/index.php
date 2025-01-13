<!-- 
    Operador Idêntico a 
com o operador idêntico a verificamos se um valor é igual ao outro 
avaliando o seu tipo também 

o símbolo é: ===

exemplo: 5 === 5 #true

exemplo 3 === "3" #false

-->

<?php 

    if(5 === 5){
        echo "Operador idêntico 1 ";
    }

    if(5 === "5"){
        echo "Operador idêntico 2 ";
    }

    if(5 === 5.1){
        echo "Operador idêntico 3 ";
    }

?>