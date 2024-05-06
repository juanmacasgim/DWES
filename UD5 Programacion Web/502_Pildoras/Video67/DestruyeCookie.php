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
    setcookie("usuario", $_GET["user"], time() - 1);
    echo "Cookie destruida";
    header("Location: Login.php")
    ?> 
</body>

</html>