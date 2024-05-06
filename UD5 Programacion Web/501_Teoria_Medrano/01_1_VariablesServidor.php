<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Variables de Servidor</title>
</head>

<body>
    <?php
    echo $_SERVER["PHP_SELF"] . "<br>";
    echo $_SERVER["SERVER_SOFTWARE"] . "<br>";
    echo $_SERVER["SERVER_NAME"] . "<br>";
    echo $_SERVER["REQUEST_METHOD"] . "<br>";
    echo $_SERVER["REQUEST_URI"] . "<br>";
    ?>
</body>

</html>