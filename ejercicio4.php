<?php

$enviado=false;

if(isset($_GET["relacion"])){

    $enviado=true;
    $nombre=$_GET["nombre"];
    $apellido=$_GET["apellidos"];
    $ciudad=$_GET["ciudad"];
    $edad=$_GET["edad"];
    $telefono=$_GET["tel"];
    $correo=$_GET["correo"];
    $relacion=$_GET["relacion"];
    switch ($variable) {
        case 'Soltero':
            $relacion= "Soltero";
            break;
        case 'Casado':
            $relacion= "Casado";
            break;
        default:
            echo "Elija una opcion";
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
    <title> Formulario </title>
</head>
<body>
        <h1> Llene el formulario </h1>

        <form method="get" action="ejercicio4.php">

        <label for="" > Introduzca su nombre </label>
        <input type="text" name="nombre"><br>

        <label for="" > Introduzca sus apellidos </label>
        <input type="text" name="apellidos"><br>

        <label for="" > Seleccione su ciudad </label>
        <select name="ciudad">
            <option> Empalme </option>
            <option> Guaymas </option>
            <option> Hermosillo </option>
            <option> Cordoba </option>
            <option> Orizaba </option>
            <option> León </option>
            <option> Monterrey </option>
            <option> Chihuahua </option>
        </select><br>

        <label for="" > Introduzca su edad </label>
        <input type="numb" name="edad"><br>

        <label for="" > Introduzca su telefono </label>
        <input type="numb" name="tel"><br>

        <label for="" > Introduzca su correo </label>
        <input type="text" name="correo"><br>

        <label for="" > Usted esta </label>
        <select name="relacion">
            <option> Soltero </option>
            <option> Casado </option>
        </select><br>

        <button type="submit" > Enviar </button>
        </form>
    
    <?php if($enviado){  ?>
    <hr>

    <h1>Nombre: <?= $nombre; ?> <br>
        Apellidos: <?= $apellido;?><br>
        Ciudad: <?= $ciudad; ?><br>
        Edad: <?= $edad; ?><br>
        Telefono: <?= $telefono; ?><br>
        Correo: <?= $correo; ?><br>
        Tipo de relacion: <?= $relacion; ?><br>
    </h2>
    

    <?php } ?>
   
</body>
</html>