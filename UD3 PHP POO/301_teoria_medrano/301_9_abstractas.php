<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>301_9_abstractas</title>
</head>

<body>
    <?php
    abstract class Producto {
        private $codigo;

        public function __construct(string $cod) {
            $this->codigo = $cod;
        }

        public function getCodigo() : string {
            return $this->codigo . "<br>";
        }

        abstract public function mostrarProducto();
    }

    class Consola extends Producto {
        private $marca;
        private $modelo;
        private $precio;

        public function __construct(string $cod, string $mar, string $mod, float $precio) {
            parent::__construct($cod);
            $this->marca = $mar;
            $this->modelo = $mod;
            $this->precio = $precio;
        }

        public function mostrarProducto() {
            echo "Código: " . $this->getCodigo();
            echo "Marca: " . $this->marca . "<br>";
            echo "Modelo: " . $this->modelo . "<br>";
            echo "Precio: " . $this->precio . "€<br>";
        }
    }

    $c = new Consola("PS5", "Sony", "PlayStation 5", 500);
    echo $c->getCodigo();
    echo "<br>";
    echo $c->mostrarProducto();
    ?>
</body>
</html>