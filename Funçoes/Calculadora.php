<?php
function soma($valorA, $valorB)
{
    return  $valorA + $valorB;
}
function subtracao($valorA, $valorB)
{
    return  $valorA - $valorB;
}
function multiplicacao($valorA, $valorB)
{
    return  $valorA * $valorB;
}
function divisao($valorA, $valorB)
{
    return  $valorA / $valorB;
}

$valorA = 3;
$valorB = 6;

echo"Valor A:";
echo" $valorA <br>";
echo"Valor B:";
echo" $valorB <br>";

echo"Resultado da soma: <br>";
echo (soma($valorA, $valorB));
echo"<br>Resultado da subtração:<br>";
echo (subtracao($valorA, $valorB));
echo"<br>Resultado da Multiplicação:<br>";
echo (multiplicacao($valorA, $valorB));
echo"<br>Resultado da Divisão:<br>";
echo (divisao($valorA, $valorB));
?>