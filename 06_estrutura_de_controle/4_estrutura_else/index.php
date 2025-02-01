<!-- 
    ESTRUTURA ELSE
a estrutuea pode executar um outro bloco de código
isso acontece quando expressão de if é false

em else não inserimos expressões

exemplo:

if(exp){

}else{

}


-->

<?php 

    $age = 13;
    $checkAge = 18;

    if($age >= $checkAge){

        echo 'É maior de idade';
    }else{
        echo 'É menor de idade';
    }



?>