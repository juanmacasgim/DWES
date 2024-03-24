<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>poo</title>
</head>

<body>
    <?php 
        include("vehiculos.php");

        //Instanciación de la clase Coche
        $mazda = new Coche();
        $pegaso = new Camion();

        echo "El Mazda tiene " . $mazda->get_ruedas() . " ruedas<br>"; //Llamada a una variable
        echo "El Pegaso tiene " . $pegaso->get_ruedas() . " ruedas<br>";

        echo "El Mazda tiene un motor de " . $mazda->get_motor() . " cc<br>";
        echo "El Pegaso tiene un motor de " . $pegaso->get_motor() . " cc<br>";
    ?>
</body>

</html>