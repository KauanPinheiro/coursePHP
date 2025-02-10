<!-- 
        WHILE
o while é uma estrutura de repetiçãp,pode executar um código 
n vezes
até satisfazer a sua condição
geralmente é necessário um contador para atingir a condição

exemplo:

    while(condicao){
        codigo
    }


-->




<?php 

// A definição do contador 
$x = 0;


// Inpicio da estrutura
    while($x < 10){

// Corpo do loop
        echo "$x <br>";

// Incremento do contador
        $x = $x + 1;
    }
    
    // Inpicio da estrutura
        while($x < 50){
    
    // Corpo do loop
            echo "$x <br>";
    
    // Incremento do contador
            $x++;
        }
?>