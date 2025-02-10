<!-- 
    EXERCÍCIO 30b
crie um array de 1 a 10
utilize um loope for para criar este array

dica: você pode utilizar o método array_push(arr,elemento)
para inserir um elemento em um array

imprima o array criado com print_r

for(contador;codicao;incremento){

    codigo
}



-->

<?php 

$arr = [];

for($i = 1; $i <= 10; $i++){
    array_push($arr, $i);
}

print_r($arr);



?>