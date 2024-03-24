<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>vehiculos</title>
</head>

<body>
    <?php
    // Clase coche
    class Coche {
        //Variables
        var $ruedas;
        var $color;
        var $motor;

        //Constructor
        function __construct() {
            $this->ruedas = 4;
            $this->color = "";
            $this->motor = 1600;
        }

        //Funcionalidades
        function arrancar() {
            echo "Estoy arrancando<br>";
        }

        function girar() {
            echo "Estoy girando<br>";
        }

        function frenar() {
            echo "Estoy frenando<br>";
        }
    }
    ?>
</body>

</html>