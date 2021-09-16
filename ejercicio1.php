<?php

$enviado=false;

if(isset($_GET["numero_1"])) { 
    $enviado=true;

    $numero1= $_GET["numero_1"];
    $numero2= $_GET["numero_2"];

    $operacion= $_GET["Operacion"];
    $resultado= 0;

    switch ($operacion) {
        case 'Suma':
            $resultado= $numero1 + $numero2;
            break;
        case 'resta' :
            $resultado= $numero1 - $numero2;
            break;
        case 'miltiplicacion' :
            $resultado= $numero1 * $numero2;
            break;
        case 'division' :
            $resultado= $numero1 / $numero2;
            break;
        default:
            echo "Seleccione una operacion correcta por favor";
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
    <title> Calculadora </title>
</head>
<body>

    <h1> Calculadora </h1>

    <form method="get" action="ejercicio1.php">

        <label for=""> Introduzca el primer numero </label><br>
        <input type= "numer" name= "numero_1" ><br>
        <label for=""> Introduzca el segundo numero </label><br>
        <input type= "numer" name= "numero_2" ><br>

        <label for=""> Seleccione su operacion </label>
        <select name= "Operacion">
            <option>Suma</option>
            <option>resta</option>
            <option>miltiplicacion</option>
            <option>division</option>
        </select>
            
        <br>
        <button type= "submit" > Calcular </button>
    </form>
    
    <?php if($enviado){ ?>
    <hr>

    <h1>  El resultado es <?= $resultado; ?>  </h2>
    

    <?php } ?>
   
</body>
</html>
