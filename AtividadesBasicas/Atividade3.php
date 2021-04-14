<?php

$a = 5;
$b = 3;
$c = 8;
$d = 12;

$soma = ($a + $d);
$div = ($b / $c);

if($soma > $div ){

    echo "A soma é maior que a dvisão";

}
else if ($soma < $div) {

    echo "A soma é menor que a dvisão";
}
else {
    echo "O valor da soma é igual ao valor da divisão";
}
?>