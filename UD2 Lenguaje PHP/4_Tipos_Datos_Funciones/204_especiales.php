<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>204_fechas</title>
</head>

<body>
    <form method="get">
        <div style="display: flex;">
            <label style="width: 20%;">
                Nombre:
            </label>
            <input type="text" name="nombre"><br>
        </div>
        <div style="display: flex;">
            <label style="width: 20%;">
                Correo electrónico:
            </label>
            <input type="text" name="email"><br>
        </div>
        <input type="submit" value="Enviar">
    </form>

    <?php
    if (isset($_GET['nombre']) && isset($_GET['email'])) {
        session_start();
        $nombre = $_GET['nombre'];
        $email = $_GET['email'];
        $_SESSION['usuario'] = $nombre;


        echo "Sesión iniciada con éxito. Hola," . $_SESSION['usuario'];


        echo "<br>Nombre: $nombre<br>";
        echo "Correo electrónico: $email<br>";

        session_destroy();

        echo "Sesión cerrada con éxito.";
    } else {
        echo "Por favor, complete el formulario.";
    }
    ?>
</body>

</html>