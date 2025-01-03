<!-- 
    NULL
o tipo dado NULL tem apenas um valor, o NULL
um caso de uso do null seria checar se uma variável tem ou não valor
podemos checar se um valor  null com IS_NULL()

-->

<?php

echo NULL;

$nome = NULL;

if(is_null($nome)){
    echo "O valor é null";
}