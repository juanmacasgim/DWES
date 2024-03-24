<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>301_5_producto</title>
</head>

<body>
    <?php
    class Producto {
        const IVA = 0.21;
        private static $numProductos = 1;
        private $codigo;
        private $precio;
        private $numProducto;

        public function __construct(string $cod, float $precio) {
            $this->numProducto = self::$numProductos++;
            $this->codigo = $cod;
            $this->precio = $precio* (1 + self::IVA);
        }

        public function mostrarProducto() {
            return "El producto $this->codigo es el numero " . $this->numProducto 
            . " y su precio es " . $this->precio . " euros.";
        }
    }

    $p1 = new Producto("PS5", 500);
    $p2 = new Producto("XBOX", 400);
    $p3 = new Producto("SWITCH", 300);
    echo $p1->mostrarProducto() . "<br>";
    echo $p2->mostrarProducto() . "<br>";
    echo $p3->mostrarProducto() . "<br>";
    ?>
</body>
</html>