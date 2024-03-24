<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Producto</title>
</head>

<body>
    <?php
    //namespace 301_14_espacio_de_nombres\Ejemplos;

    const IVA = 0.21;

    class Producto{
        public $nombre;

        public function muestra(): void {
            echo "<p> Producto: $this->nombre </p>";
        }
    }
    ?>
</body>
</html>