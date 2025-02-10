<!-- 
    EXERCÍCIO 29
crie um array com valores inteiros de 10 a 100
com incremento de 10;
aplique um loope neste array 
quando entrar os valores 30 ou 40
pule para a próxima execução 

-->

<?php 

$arr = [10,20,30,40,50,60,70,80,90,100];
$y = 0;

while($y < count($arr)){

    if($arr[$y] == 30 || $arr[$y] == 40){
        $y++;
        continue;
    }



    echo "Elemento:". $arr[$y] ."<br>";
    $y++;

    



}

?>