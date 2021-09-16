<?php

    $enviado=false;

    if(isset($_GET["puerta"])) {
        
        $enviado=true;
        $muestra;
        $puerta=$_GET["puerta"];

        switch ($puerta) {
            case '1':
                $muestra= "una piedra";
                break;
            case '2':
                $muestra= "uuuuuuun autooooo!!!";
                break;
            case '3':
                $muestra= "una caaaabra";
                break;
            default:
                $muestra= "nada porque no selecciono una puerta correcta";
                break;
        }
    }

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title> Juego de puertas </title>
</head>
<body>

    <h1> Las puertas misteriosas </h1>

    <form method="get" action="ejercicio2.php">

        <label for=""> ¿Elige abrir la puerta 1, 2 o 3?</label><br>
        <input type= "number" name= "puerta"><br>

        <button type= "submit" > Aceptar </button>
    </form>

    <?php if($enviado){ ?>
    <hr>

    <h1> Usted a ganado  <?= $muestra; ?>  </h1>
    

    <?php } ?>
</body>
</html>