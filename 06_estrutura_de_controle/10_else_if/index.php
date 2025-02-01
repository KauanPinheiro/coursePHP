<!-- 
    ELSE IF 
com o else if podemos criar um novo bloco de expressão
este bloco será executado caso o primeiro if seja falso
o if fica entre o if e o else 


exemplo:

if(exp){

}else if(exp){

}

-->

<?php 

if(2 > 3){
    echo 'Entrendo no primeiro if <br>';
}else if(2 < 3){
    echo 'Entrando no segunfo if <br>';
}

if(2 < 3){
    echo 'Entrendo no primeiro if <br>';
}else if(10 > 3){
    echo 'Entrando no segunfo if <br>';
}

?>