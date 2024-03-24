<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>301_8_herencia2</title>
</head>

<body>
    <?php
    class Producto {
        public $codigo;
        public $marca;
        public $modelo;
        public $precio;

        public function __construct(string $cod, string $mar, string $mod, float $precio) {
            $this->codigo = $cod;
            $this->marca = $mar;
            $this->modelo = $mod;
            $this->precio = $precio;
        }

        public function mostrarProducto() {
            return  "Producto: $this->codigo<br>" .
                    "Marca: $this->marca<br>" .
                    "Modelo: $this->modelo<br>" .
                    "Precio: " . $this->precio . "€<br>";
        }
    }

    class Ordenador extends Producto {
        public $procesador;
        public $ram;

        public function __construct(string $cod, string $mar, string $mod, float $precio, string $procesador, string $ram) {
            parent::__construct($cod, $mar, $mod, $precio);
            $this->procesador = $procesador;
            $this->ram = $ram;
        }

        public function mostrarProducto() {
            return parent::mostrarProducto() . " Procesador: $this->procesador<br>" . "RAM: $this->ram";
        }
    }

    $t = new Ordenador("PC01", "HP", "Pavilion", 500, "Intel i5", "8GB");
    if ($t instanceof Producto) {
        echo $t->mostrarProducto();
    }
    ?>
</body>
</html>