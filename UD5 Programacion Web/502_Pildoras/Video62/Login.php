<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>

    <style>
        h1,
        h2 {
            text-align: center;
        }

        table {
            width: 25%;
            background-color: #FFC;
            border: 2px dotted #F00;
            margin: 0 auto;
        }

        .izq {
            text-align: right;
        }

        .der {
            text-align: left;
        }

        td {
            text-align: center;
            padding: 10px;
        }
    </style>
</head>

<body>
    <?php
    require("Conexion.php");

    if (isset($_POST["enviar"])) {
        try {
            // Creacion de la consulta
            $sql = "SELECT * FROM usuario_pass WHERE USUARIO = :login AND PASSWORD = :password";

            // Preparacion de la consulta
            $resultado = $conexion->prepare($sql);

            // Recogida de los datos del formulario
            $login = htmlentities(addslashes($_POST["login"]));
            $password = htmlentities(addslashes($_POST["password"]));

            // Enlazamos los parametros
            $resultado->bindValue(":login", $login);
            $resultado->bindValue(":password", $password);

            // Ejecucion de la consulta
            $resultado->execute();

            // Comprobacion de si hay algun registro
            $numero_registro = $resultado->rowCount();
            if ($numero_registro != 0) {
                // Iniciamos la sesion
                session_start();
                $_SESSION["usuario"] = $_POST["login"];
            } else {
                echo "Usuario o contraseña incorrectos<br>";
            }
        } catch (Exception $e) {
            die('Error: ' . $e->getMessage());
        }
    }
    ?>


    <?php
    if (!isset($_SESSION["usuario"])) {
        include("Formulario.php");
    } else {
        echo "Usuario: " . $_SESSION["usuario"];
    }
    ?>

    <h2>Contenido de la web</h2>
    <table width="800" border="0">
        <tr>
            <td><img src="imagenes/Amazon.png" width="300" height="166"></td>
            <td><img src="imagenes/GameAwards.png" width="300" height="166"></td>
        </tr>
        <tr>
            <td><img src="imagenes/Midureact.png" width="300" height="166"></td>
            <td><img src="imagenes/Setup.jpg" width="300" height="166"></td>
        </tr>
    </table>
</body>

</html>