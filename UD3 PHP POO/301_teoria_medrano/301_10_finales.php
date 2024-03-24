<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>301_10_finales</title>
</head>

<body>
    <?php
    class Producto {
        public $codigo;

        public function getCodigo() : string {
            return $this->codigo . "<br>";
        }

        final public function mostrarProducto() {
            echo "Código: " . $this->getCodigo();
        }
    }

    final class Silla extends Producto {
        public $marca;

        public function getMarca() : string {
            return $this->marca . "<br>";
        }
    }

    $s = new Silla();
    $s->codigo = "S01";
    $s->marca = "Ikea";
    $s->mostrarProducto();
    ?>
</body>
</html>