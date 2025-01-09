<!-- 
    MUDANÇA DE TIPO IMPLÍCITO

o PHP em certas operações muda o tipo de dado de forma implicita 
por exemplo 5 / 2 = 2.5 (gera um FLOAT)
e 5 . 5 resulta em 55 (gera uma STRING), o . é o operador de concatenação
por isso, temos que tomar cuidado com algumas expressões que podem
gerar resultados indesejados 
este recurso é chmado de auto cast 

-->

<?php

echo 5 / 2;
echo "<br>";

echo 5 . 5;
echo "<br>";


