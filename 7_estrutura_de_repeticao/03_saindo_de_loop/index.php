<!-- 
    SAINDO DE LOOP
podemos sair de um loop while antes do seu fim
para isso é necesário adicionar a instrução break
após interpretada, o loop será automaticamente finalizado

geralmente inserimos esta instrução em uma condição if

-->

<?php 

$x = 0;

while ($x < 10){
    echo "O x é $x <br>";

    if($x === 5){
        echo "testando o loop <br>";
        break; //termiando o loop
    }

    $x++;
}

?>
