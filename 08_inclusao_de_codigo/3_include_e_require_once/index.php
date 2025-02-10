<!-- 
    INCLUDE_ONDE E REQUIRE_ONCE
os dois funcionam da mesma maneira que require incluide
porém impedem que o mesmo arquivo seja adicionado mais 
de uma vex na página 

este pode ser o método mais indicado quando estamos 
montando templetes com PHP


-->

<?php 

// Arquivos que não existem 
// Incluide Once "teste.php"
include_once "teste.php";

// Arquivos que não existem 
// require Once "teste.php"
require_once "teste2.php";

?>

<p>Testando o arquivo</p>