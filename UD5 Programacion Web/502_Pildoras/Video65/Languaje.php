<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Languaje</title>
</head>

<body>

    <?php
    if (isset($_COOKIE["idioma"])) {
        if ($_COOKIE["idioma"] == "es") {
            header("Location: Spanish.php");
        } else if ($_COOKIE["idioma"] == "en") {
            header("Location: English.php");
        }
    }
    ?>

    <table width="25%" border="0" align="center">
        <tr>
            <td colspan="2" align="center">
                <h1>Elige idioma</h1>
            </td>
        </tr>
        <tr>
            <td align="center"><a href="creaCookie.php?idioma=es"><img src="imagenes/España.jpg" width="90" height="90"></a></td>
            <td align="center"><a href="creaCookie.php?idioma=en"><img src="imagenes/Inglaterra.png" width="90" height="90"></a></td>
        </tr>

</body>

</html>