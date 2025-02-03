<!-- 
    EXERCÍCIO 27
crie um array com alguns valores (pelo menos 10) 
de tipos de dados diferentes 
faça um loop while para exibir apenas os dados que são strings


-->

<?php 

    $arr = ['isa',1,'lucas',2,'debora',3,'joao',4,'pedro',5];

    $x = count($arr);
    $y = 0;

    while($y < $x){

        if(is_string($arr[$y]))
            echo ($arr[$y]) . "<br>";

            $y++;
    }


?>