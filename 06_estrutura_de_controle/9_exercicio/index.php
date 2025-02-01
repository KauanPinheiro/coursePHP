<!-- 
    EXERCÍCIO 25
crie variável com números e outras com strings
faça um if checando se é um número 
caso for, atribua a multiplocação deste
número em outra variável
e crie um outro if, que checa se o novo número é maior que 100
se sim, imprima uma mensagem


-->

<?php 
    $a = 2;
    $b = 500;
    $c = 'isa';
    $d = 'lucas';

    if(is_numeric($a)){
        $mult = $a * 2;

        if($mult > 100){
            echo " $mult é maior que 100 <br>";
        }else{
            echo " $mult é maior que 100 <br>";
        }
    }
    
    if(is_numeric($b)){
        $mult = $b * 2;

        if($mult > 100){
            echo " $mult é maior que 100 <br>";
        }else{
            echo " $mult é maior que 100 <br>";
        }
    }
    
    if(is_numeric($c)){
        $mult = $c * 2;

        if($mult > 100){
            echo " $mult é maior que 100 <br>";
        }else{
            echo " $mult é maior que 100 <br>";
        }
    }
    
    if(is_numeric($d)){
        $mult = $d * 2;

        if($mult > 100){
            echo " $mult é maior que 100 <br>";
        }else{
            echo " $mult é maior que 100 <br>";
        }
    }


?>