<!-- 
    SWITCH
o switch é uma estrutura de condição, que pode substituir 
o if em alguns casos 
podemos adcionar a instrução BREAK, para ele não ser 
mais executado
há a possibilidade também de adicionar a intrução
DEFAULT, que é executada caso nenhuma condição seja satisfeita 


-->

<?php 

$x = 0;

switch($x){

    case 0:
        echo 'X é igual a 0 <br>';
        break;
    case 1:
        echo 'X é igual a 1 <br>';
        break;
    default;

}



?>