<!-- 
    EXERCÍCIO 6
crie um arquivo em PHP
crie um array com caractéristicas de um carro;
imprima duas caractéristicas


-->

<?php

$car = ['marca' => "porshe", 'cor' => 'preta', 'ano' => 2025];

print_r($car);
echo '<br>';

echo $car['marca'];
echo "<br>";

echo $car['cor'];
echo '<br>';

echo $car['ano'];
echo '<br>';