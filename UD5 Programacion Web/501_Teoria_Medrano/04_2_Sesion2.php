<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sesion</title>
</head>

<body>
    <?php
    session_start();
    $nickname = $_SESSION["userid"];
    echo "Hola, por segunda vez $nickname<br />";
    ?>
</body>

</html>