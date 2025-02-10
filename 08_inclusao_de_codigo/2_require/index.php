<!-- 
    REQUIRE
com o require inserimos um arquivo de php, ou até mesmo 
um html
podebdi assim utlizar tudo que está declarado no 
arquivo incluindo 

o require gera erro fatal se o arquivo não existir 
parando o script

exemplo:

require "arquivo.ext"


-->

<?php 

require "teste.php";



?>

<p>Arquibo do incluide</p>

<?php 
    require "arquivo/funcoes.php";

?>