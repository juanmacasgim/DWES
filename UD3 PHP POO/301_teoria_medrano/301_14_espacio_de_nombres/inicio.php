<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>inicio</title>
</head>

<body>
    <?php
    include_once("Ejemplos/Producto.php");

    use const Dwes\Ejemplos\IVA;
    use \Dwes\Ejemplos\Producto;

    echo IVA;
    $p1 = new Producto();
    ?>
</body>

</html>