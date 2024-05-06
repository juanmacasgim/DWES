<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Autentificacion de usuarios</title>
</head>

<body>
    <?php
    // Comprobamos si ya se ha enviado el formulario
    if (isset($_POST['enviar'])) {
        $usuario = $_POST['inputUsuario'];
        $password = $_POST['inputPassword'];

        // validamos que recibimos ambos parámetros
        if (empty($usuario) || empty($password)) {
            $error = "Debes introducir un usuario y contraseña";
            include "05_1_Autentificacion_Index.php";
        } else {
            if ($usuario == "admin" && $password == "admin") {
                // almacenamos el usuario en la sesión
                session_start();
                $_SESSION['usuario'] = $usuario;
                // cargamos la página principal
                include "05_1_Autentificacion_Main.php";
            } else {
                // Si las credenciales no son válidas, se vuelven a pedir
                $error = "Usuario o contraseña no válidos!";
                include "05_1_Autentificacion_Index.php";
            }
        }
    }
    ?>
</body>

</html>