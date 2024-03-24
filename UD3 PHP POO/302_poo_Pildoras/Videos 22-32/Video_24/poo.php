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

        //Llamada a un método que recibe un parámetro
        $mazda->establece_color("Rojo", "Mazda");
        //La clase Camion no tiene el método establece_color
        echo "El Pegaso es " . $pegaso->color . "<br>";

        //$mazda->girar(); //Llamada a un método
        echo "El Mazda tiene " . $mazda->ruedas . " ruedas<br>"; //Llamada a una variable
        echo "El Pegaso tiene " . $pegaso->ruedas . " ruedas<br>";
    ?>
</body>

</html>