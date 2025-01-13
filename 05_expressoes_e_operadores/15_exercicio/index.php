<!-- 
    EXERCÍCIO 15
crie uma operação que retorne falso com igualdade 
crie uma operação que retorne verdadeiro com igualdade 


-->

<?php 

    $name = "Isabela";

    $nameServe = "Isabela";

    $nameErr = "outro";

    if($name == $nameServe){
        echo "Usuário existente 1";
    }

    if($name == $nameErr) {
        echo "Usuário existente 2";
    }
?>