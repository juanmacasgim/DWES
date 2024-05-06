<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Comprueba Login</title>

    <style>
        h1 {
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

try{
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
    if($numero_registro != 0) {
        // Iniciamos la sesion
        session_start();
        $_SESSION["usuario"] = $_POST["login"];
        header("location:Usuarios_Registrados.php");
    } else {
        header("location:Login.php");
    }
} catch(Exception $e) {
    die('Error: ' . $e->getMessage());
}
?>
</body>
</html>