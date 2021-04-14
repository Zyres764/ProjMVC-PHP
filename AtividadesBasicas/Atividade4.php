<?php 

$Nota1 = 5;
$Nota2 = 7;
$Nota3 = 3;
$Nota4 = 10;

$media = ($Nota1 + $Nota2 +$Nota3 +$Nota4 / 4);

if($media > 7 ){

    echo "Aprovado";

}
else if ($media > 5 && $media <7) {

    echo "Recuperação";
}
else {
    echo "reprovado";
}
?>