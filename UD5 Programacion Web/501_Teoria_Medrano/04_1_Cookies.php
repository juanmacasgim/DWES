<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cookies</title>
</head>

<body>
    <?php
    $accesosPagina = 1; //Variable que almacena el número de accesos a la página

    //Si existe la cookie 'accesos' se recupera su valor y se incrementa en 1
    if (isset($_COOKIE['accesos'])) {
        $accesosPagina = $_COOKIE['accesos'];
        $accesosPagina++;
    }
    //Crea la cookie 'accesos' y le asigna el valor de la variable $accesosPagina
    setcookie('accesos', $accesosPagina);
    ?>
    
    <!-- Esta parte simplemente es un botón para actualizar -->
    <h1>Contador de accesos</h1>
    <p>Esta página ha sido visitada <?php echo $accesosPagina; ?> veces</p>
    <p><a href="04_1_Cookies.php">Actualizar</a></p>
</body>

</html>