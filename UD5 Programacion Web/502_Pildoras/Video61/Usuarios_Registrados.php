<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Usuarios Registrados</title>
</head>

<body>
    <?php
    // Recuperamos la sesión
    session_start();

    // Comprobamos si la sesión está vacía
    if (!isset($_SESSION["usuario"])) {
        header("Location:Login.php");
    }
    ?>

    <!-- Si la sesion está iniciada se muestra esto -->
    <h1> Bienvenidos Usuarios</h1>

    <?php
    echo "Hola: " . $_SESSION["usuario"] . "<br><br>";
    ?>

    <!-- Botón para cerrar sesion -->
    <p><a href="Exit.php">Cerrar Sesión</p>
</body>
</html>