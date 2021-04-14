<?php


$fatorial = 7;
echo"O valor a ser fatorado é: $fatorial ";
$mult = 1;

    for($b = $fatorial; $b >1; $b-- ){

    $mult *= $fatorial;
    $fatorial--;
    }
    echo"resultado é: $mult ";  
    

