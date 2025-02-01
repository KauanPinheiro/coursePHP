<!-- 
    EXERCÍCIO 24
crie algumas variáveis com tipos de dados diferentes:
string,int e boolean, por exemplo;


cheque se a variável é um inteiro

caso sim, apresente uma mensagem confimando o tipo de dado

caso não, apresente outra mensagem

-->

<?php 

    $inteiro = 10;
    $str = "isa";
    $bool = true;

    if(is_int($inteiro)){
        echo 'O dado  é um inteiro <br>';
    }else{
        echo 'O dado não é um inteiro <br>';
    }

    if(is_int($str)){
        echo 'O dado  é um inteiro <br>';
    }else{
        echo 'O dado não é um inteiro <br>';
    }

    if(is_int($bool)){
        echo 'O dado  é um inteiro <br>';
    }else{
        echo 'O dado não é um inteiro <br>';
    }



?>