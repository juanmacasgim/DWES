<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>301_6_introspeccion</title>
</head>

<body>
    <?php
    class Producto {
        const IVA = 0.21;
        private static $numProductos = 1;
        public $codigo;
        public $precio;
        public $numProducto;

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

    $p = new Producto("PS5", 500);
    if ($p instanceof Producto) {
        echo "Es un producto";
        echo "<br>";
        echo "La clase es " . get_class($p);
        echo "<br>";

        class_alias("Producto", "Articulo");
        $c = new Articulo("Nintendo Switch", 300);
        echo "Un articulo es un " . get_class($c);
        echo "<br>";

        print_r(get_class_methods("Producto"));
        echo "<br>";
        print_r(get_class_vars("Producto"));
        echo "<br>";
        print_r(get_object_vars($p));
        echo "<br>";

        if (method_exists($p, "mostrarProducto")) {
            echo $p->mostrarProducto();
        }
    }
    ?>
</body>

</html>