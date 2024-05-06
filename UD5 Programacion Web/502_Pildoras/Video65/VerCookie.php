<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>VerCookie</title>
</head>

<body>
    <?php
        if (isset($_COOKIE["idioma"])) {
            if ($_COOKIE["idioma"] == "es") {
                header("Location: Spanish.php");
            } else if ($_COOKIE["idioma"] == "en") {
                header("Location: English.php");
            }
        } else {
            header("Location: Languaje.php");
        }
    ?> 
</body>

</html>