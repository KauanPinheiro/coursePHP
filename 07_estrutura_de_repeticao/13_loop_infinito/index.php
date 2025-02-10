<!-- 
    LOOP INFINITO
o loop infinito é um erro que pode ser ocasionado quando
uma estrutura de repetição nçao tem uma condição de término 
que seja possível 

por exemplo: x>10 e a variável de refência tem um 
decremento, não um incremento 

issa vai fazer o software travar, e pode ser um grande
problema caso o usuário estejam acessando o mesmo

-->

<?php 

for($i = 0; $i < 10; $i--){
    echo " teste <br>";
}

?>