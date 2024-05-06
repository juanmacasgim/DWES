<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cookie</title>
</head>

<body>
    <?php
    // Creamos una cookie
    setcookie("prueba", "Esta es la información de nuestra primera cookie", time() + 15);
    ?>
</body>
</html>