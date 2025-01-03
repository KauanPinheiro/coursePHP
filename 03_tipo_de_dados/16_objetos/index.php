<!-- 
    OBJETOS
PHP possui o paradigma de orientação a objetos
podemos criar classes e objetos, e o objeto é considerado um tipo de 
dado 
objetos possuem métodos que são suas ações e propriedades que são
suas características 
veremos objetos em maiores detalhes futuramente no curso


-->

<?php

class Pessoa {

    function falar(){
        echo "Olá pessoa!!";
    }
}

$kauan = new Pessoa();

$kauan -> nome = "Kauan";

echo $kauan -> nome;

echo "<br>";

$kauan -> falar();
