<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>301_4_ordenElementos</title>
</head>

<body>
    <?php
        class OrdenElementos {
            // Propiedades o Variables
            private string $nombre;
            private int $edad;

            // Constructor
            public function __construct(string $nombre, int $edad) {
                $this->nombre = $nombre;
                $this->edad = $edad;
            }

            // Getters y Setters
            public function getNombre() : string {
                return $this->nombre;
            }

            public function setNombre(string $nombre) {
                $this->nombre = $nombre;
            }

            public function getEdad() : int {
                return $this->edad;
            }

            public function setEdad(int $edad) {
                $this->edad = $edad;
            }

            // Resto de Métodos
            public function imprimir() {
                echo "El nombre es $this->nombre y tiene $this->edad años.";
            }
        }

        $p1 = new OrdenElementos("Juanma", 25);
        $p1->imprimir();
    ?>
</body>
</html>