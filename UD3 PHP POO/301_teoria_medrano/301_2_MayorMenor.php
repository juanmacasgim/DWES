<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>301_2_MayorMenor</title>
</head>

<body>
    <?php
        class MayorMenor {
            private int $mayor;
            private int $menor;

            public function setMayor(int $mayor) {
                $this->mayor = $mayor;
            }

            public function setMenor(int $menor) {
                $this->menor = $menor;
            }

            public function getMayor() : int {
                return $this->mayor;
            }

            public function getMenor() : int {
                return $this->menor;
            }
        }

        function maymen(array $numeros) : ?MayorMenor {
            $num1 = max($numeros);
            $num2 = min($numeros);

            $result = new MayorMenor();
            $result->setMayor($num1);
            $result->setMenor($num2);

            return $result;
        }

        $resultado = maymen([1, 2, 3, 4, 5, 6, 7, 8, 9, 10]);
        echo "El mayor es " . $resultado->getMayor() . " y el menor es " . $resultado->getMenor();
    ?>
</body>
</html>