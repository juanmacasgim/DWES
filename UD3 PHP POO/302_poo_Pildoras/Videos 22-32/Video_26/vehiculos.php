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
        private $ruedas;
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

        function establece_color($color_coche, $nombre_coche){
            $this->color = $color_coche;
            echo "El color de " . $nombre_coche .  " es: " . $this->color . "<br>";
        }
    }


    // Clase Camion
    class Camion extends Coche {
        //Constructor
        function __construct() {
            $this->ruedas = 8;
            $this->color = "gris";
            $this->motor = 2600;
        }

        function arrancar() {
            parent::arrancar();
            echo "Camion arrancado<br>";
        }

        function establece_color($color_camion, $nombre_camion){
            $this->color = $color_camion;
            echo "El color de " . $nombre_camion .  " es: " . $this->color . "<br>";
        }
    }
    ?>
</body>

</html>