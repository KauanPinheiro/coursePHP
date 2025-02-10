<!-- 
    INSERINDO PHP AO HTML
como abordado nas seções iniciais, esta é uma das principais
funcionalidades PHP
podemos inserir código dinãmico entre nossas tags
as extensões para este tipo de arquivo pode ser de 

.php ou .phtml

ex: 

<h1><?=$titulo?></h1>

-->

<?php 

    require_once "backend.php";

?>

<h1>Seja bem-vindo ao nosso site</h1>
<p><?= $nome;?> Veja as  nossas ofertas</p>

<h2>Confira nossos principais produtos </h2>
<?php foreach($produtos as $produto):?>
    <li><?= $produto?></li>
<?php endforeach;?>
