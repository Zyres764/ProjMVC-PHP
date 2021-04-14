<?php

function  listarArtistas($artistas)
{

    switch ($artistas) {
        case "Imagine Dragons":
            echo "Beliver<br>";
            echo "Radioactive<br>";
            echo "Thunder<br>";
            break;
        case "Barões Da Pisadinha":
            echo "Recairei<br>";
            echo "Basta você me ligar<br>";
            echo "Ta rocheda<br>";
            break;
        case "MC Caveirinha<br>":
            echo "Tipo GTA<br>";
            echo "Flash<br>";
            echo "Avião<br>";
            break;
        case "Coldplay<br>":
            echo "Paradise<br>";
            echo "Viva la vida<br>";
            echo "Hymn For The Weekend<br>";
            break;
        case "Matue":
            echo "A morte do autotune<br>";
            echo "Kenny G<br>";
            echo "Quem manda é a 30<br>";
            break;
    }



}
echo ("Lista de Musicas: <br>");
echo (listarArtistas("Imagine Dragons"));
?>