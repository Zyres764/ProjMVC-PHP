<?php
     session_start();
     ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>Resultado</h1>
     <?php
        if (isset($_SESSION['user']) && isset($_SESSION['mail'])){
            echo'<br> Usuario' .$_SESSION['user'] . 
                '<br> E-mail' .$_SESSION['mail'];

            unset ($_SESSION ['user']);
            unset ($_SESSION ['mail']);
        } 
     ?>
</body>
</html>