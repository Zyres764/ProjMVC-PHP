<?php

$tamanho = 1.5;
$imc = 0;
$escolha = 2;
echo"Calculo do IMC:";

switch ($escolha){
    case 1 :
       $imc = (72.2 * $tamanho)- 58;
        echo"<br>Masculino: $imc";
        break;
    case 2 :
        $imc = (62.1 * $tamanho)- 44;
        echo"<br>Feminino : $imc";
        break;

}
?>