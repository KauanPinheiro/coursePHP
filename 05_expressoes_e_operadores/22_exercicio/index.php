<!-- 
    EXERCÍCIO 17
verificamos as seguintes operações com  AND

15 > 5 and "João" === "joão"

"teste" > 5 and 1

2 == 3 ane 5>=3

-->

<?php 

    if(15 > 5 && "João" === "João"){
        echo "Condição 1 <br>";
    }
    if("teste" > 5 && 1){
        echo "Condição 2 <br>";
    }
    if(2 == 3 && 5 >= 3){
        echo "Condição 3 <br>";
    }
?>