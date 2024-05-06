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
    setcookie("usuario", $_POST["login"], time() - 1);
    echo "Cookie destruida";
    ?> 
</body>

</html>