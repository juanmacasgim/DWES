<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exit</title>
</head>

<body>
    <?php
    // Recuperamos la sesión
    session_start();

    // Destruimos la sesión
    session_destroy();

    // Redirigimos al usuario a la página de login
    header("Location:Login.php");
    ?>
</body>
</html>