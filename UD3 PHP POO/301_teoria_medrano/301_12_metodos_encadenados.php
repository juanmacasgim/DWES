<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>301_12_metodos_encadenados</title>
</head>

<body>
    <?php
    class Producto {
        private string $nombre;
        private float $precio;

        public function getNombre() : string {
            return $this->nombre;
        }

        public function setNombre(string $nombre) : Producto {
            $this->nombre = $nombre;
            return $this;
        }

        public function getPrecio() : float {
            return $this->precio;
        }

        public function setPrecio(float $precio) : Producto {
            $this->precio = $precio;
            return $this;
        }

        public function __toString() : string {
            return "Nombre: " . $this->getNombre() . "<br>
                    Precio: " . $this->getPrecio()  . "<br>";
        }
    }

    $p = new Producto();
    $p2 = new Producto();
    $p->setNombre("Silla")->setPrecio(100);
    $p2->setNombre("Mesa")->setPrecio(200);
    echo $p->__toString();
    echo $p2->__toString();
    ?>
</body>
</html>