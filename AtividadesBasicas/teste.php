<?php 



$a = 3;

    switch ($a){
        case 1 :
            echo"Valor 1";
            break;
        case 2 :
            echo"Valor 2";
            break;
    default;
        echo"aaaaa";
    }

    while ($a > 0){
        echo"<br>Valor maior que 0";
        $a--;

    }

    do {

        echo " <br>Valor de A:$a";

    } while($a > 0);


    for($b = 0; $b < 5; $b++ ){

        echo"<br>valor de B: $b";
    }
?>