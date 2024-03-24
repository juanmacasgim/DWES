<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>301_3_punto</title>
</head>

<body>
    <?php
        /* class Punto {
            protected int $x;
            protected int $y;
            protected int $z;

            public function __construct(int $x = 0.0, int $y = 0.0, int $z = 0.0) {
                $this->x = $x;
                $this->y = $y;
                $this->z = $z;
            }
        } */

        class Punto {
            public function __construct(public float $x = 0, public float $y = 0, public float $z = 0) {}

            public function imprimir() {
                echo "Las coordenadas son $this->x . $this->y . $this->z .";
            }
        }

        $punto = new Punto(1.1, 2.2, 3.3);
        $punto->imprimir();
    ?>
</body>
</html>