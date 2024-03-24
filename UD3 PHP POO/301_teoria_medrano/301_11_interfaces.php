<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>301_11_interfaces</title>
</head>

<body>
    <?php
    interface IVA {
        public function calcularIVA() : float;
    }

    interface Descuento {
        public function calcularDescuento() : float;
    }

    class Producto implements IVA, Descuento {
        public $precio;

        public function __construct($precio) {
            $this->precio = $precio;
        }

        public function calcularIVA() : float {
            return $this->precio * 1.21;
        }

        public function calcularDescuento() : float {
            return $this->precio * 0.90;
        }
    }

    $p = new Producto(100);
    echo "Precio: " . $p->precio . "<br>";
    echo "Precio con IVA: " . $p->calcularIVA() . "<br>";
    echo "Precio con descuento: " . $p->calcularDescuento();
    ?>
</body>
</html>