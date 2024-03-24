<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>301_1_persona</title>
</head>

<body>
    <?php
    class Persona {
        private string $nombre;
        private int $edad;

        public function setNombre(string $nombre) {
            $this->nombre = $nombre;
        }

        public function setEdad(int $edad) {
            $this->edad = $edad;
        }

        public function imprimir() {
            echo "El nombre es $this->nombre y tiene $this->edad años.";
        }
    }

    $p1 = new Persona();
    $p1->setNombre("Juanma");
    $p1->setEdad(25);
    $p1->imprimir();
    ?>
</body>

</html>