<?php

function s ($x, $y){

    return $x + $y;
}
echo"x+y: + $x";
function espera (){

    
    
    for($x=0; $x<9999; $x++);
}

$x= 10;
$y = 50;
soma($x, $y);

 function substitui(&$valorA, $valorB) {
   $aux = $valorA;
   $valorA = $valorB;
   $valorB = $aux;
  echo "<p>vA: $valorA e vB: $valorB - NA função";
 }

   $vA = 10;
 $vB = 500;
 echo "<p>vA: $vA e vB: $vB - antes da função";
 substitui($vA, $vB);
 echo "<p>vA: $vA e vB: $vB - depois da função";


 
 function soma($valorA, $valor = 400) {
    return $valorA+$valor;
    }
   
    $vA = 10;
$somatorio = soma($vA);
echo "<p>$somatorio";
?>