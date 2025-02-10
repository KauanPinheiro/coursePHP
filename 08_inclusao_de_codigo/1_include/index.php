<!-- 
    INCLUDE
com o include inserimos um arquivo de php, ou até mesmo
um html em outro
podendo assim utlizar tudo que está declarado no 
arquvo incluido
o include não gera erro fatal se o arquivo existir,
e sim um warning

exemplo:

include "arquivo.ext"


-->

<?php 
    include "teste.php";

?>

<p>Lorem</p>

<p>Testando c <?php echo $c?></p>
