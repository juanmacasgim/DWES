<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>301_7_herencia</title>
</head>

<body>
    <?php
    class Producto {
        public $codigo;
        public $marca;
        public $modelo;
        public $precio;

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

        public function mostrarProducto() {
            return parent::mostrarProducto() . 
                    " Procesador: $this->procesador<br>" . 
                    "RAM: $this->ram";
        }
    }

    $t = new Ordenador();
    $t->codigo = "PC01";
    $t->marca = "HP"; 
    $t->modelo = "Pavilion";
    $t->precio = 500;
    $t->procesador = "Intel i5";
    $t->ram = "8GB";
    if ($t instanceof Producto) {
        echo $t->mostrarProducto();
    }
    ?>
</body>
</html>