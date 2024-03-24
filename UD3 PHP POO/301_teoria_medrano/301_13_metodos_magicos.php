<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>301_13_metodos_magicos</title>
</head>

<body>
    <?php
    class Producto {
        public string $nombre;
        public float $precio;

        public function __construct(string $nombre, float $precio) {
            $this->nombre = $nombre;
            $this->precio = $precio;
        }

        public function __get($name){
            if(property_exists($this, $name)){
                return $this->$name;
            }
        }

        public function __set($name, $value){
            if(property_exists($this, $name)){
                $this->$name = $value;
            }
        }

        public function __toString() : string {
            return "Nombre: " . $this->nombre . "<br>
                    Precio: " . $this->precio  . "<br>";
        }
    }
    ?>
</body>
</html>