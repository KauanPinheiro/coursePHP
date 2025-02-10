<!-- 
    FOREACH
a foreach também é uma estrutura de repetição
porém ela é orienteada a um array, devemos utilizar
um para que a estrutura repita em todos os elementos
do mesmo 

exemplo

foreach($array as $item){
    codigo

}



-->

<?php 

$nomes = ["matheus","joão","pedro","maria"];

foreach($nomes as $nome){
    echo "O nome do índice atual é $nome <br>;";
}


?>