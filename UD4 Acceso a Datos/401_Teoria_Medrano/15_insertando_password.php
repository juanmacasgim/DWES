<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Insertando Contraseña</title>
</head>

<body>
    <div>
        <form method="POST" action="15_insertando_password.php">
            <label for="usuario">Usuario:</label><br>
            <input type="text" id="usuario" name="usuario"><br>
            <label for="password">Contraseña:</label><br>
            <input type="password" id="password" name="password"><br>
            <input type="submit" value="Submit">
        </form>
    </div>

    <?php
    include 'config/database.inc.php';

    // 2. Conexión a la base de datos
    try {
        $conexion = new PDO(DNS, USER, PASSWORD);
        $conexion->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

        $usu = $_POST["usuario"];
        $pas = $_POST["password"];

        // Comprueba que los campos no están vacios
        if (!empty($usu) && !empty($pas)) {
            // Comprueba si el usuario ya existe
            $sql = "Select * from users where user = :usuario";
            $sentencia = $conexion->prepare($sql);
            $sentencia->execute([
                "usuario" => $usu
            ]);
            $resultado = $sentencia->fetch();

            // Si el usuario existe he inicia sesion, muestra un mensaje
            if ($resultado && password_verify($pas, $resultado['password'])) {
                echo "El usuario ha iniciado sesión correctamente.";
            } else if ($resultado) {
                // Si el usuario existe pero la contraseña es incorrecta, muestra un mensaje
                echo "La contraseña es incorrecta.";
            } else {
                // Si el usuario no existe, lo inserta en la base de datos
                $sql = "INSERT INTO users(user, password) VALUES (:usuario, :contra)";
                $sentencia = $conexion->prepare($sql);
                $isOk = $sentencia->execute([
                    "usuario" => $usu,
                    "contra" => password_hash($pas, PASSWORD_DEFAULT)
                ]);
                if ($isOk) {
                    echo "Usuario insertado correctamente.";
                } else {
                    echo "Error al insertar el usuario.";
                }
            }
        } else {
            echo "El usuario y la contraseña no pueden estar vacíos.";
        }
    } catch (PDOException $e) {
        echo $e->getMessage();
    }
    ?>
</body>

</html>