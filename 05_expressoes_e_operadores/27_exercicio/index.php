<!-- 
    EXERCÍCIO 19
converta os seguintes dados para int com o operador de cast

"testando"
12.9
[1,2,3]

e veja os resultaods

-->

<?php 

    $a = (int) "testando";
    $b = (int) 12.9;
    $c = (int) true;
    $d = (int) [1,2,3];

    echo "$a <br>";
    echo "$b <br>";
    echo "$c <br>";
    echo "$d <br>";

?>