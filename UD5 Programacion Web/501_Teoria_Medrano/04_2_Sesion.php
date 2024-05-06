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
    $_SESSION["userid"] = "juanmacasgim";
    $nickname = $_SESSION["userid"];
    echo "Hola, por primera vez $nickname<br />";
    ?>

    <br />
    <a href="04_2_Sesion2.php">Y luego</a>
</body>

</html>