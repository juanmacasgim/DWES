<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>214_formulario4</title>
</head>

<body>
    <?php
    if (isset($_POST['enviar'])) {
        $nombre = $_POST['nombre'];
        $hobbies = $_POST['hobbies']; // Array con las opciones seleccionadas
        echo "Nombre: " . $nombre . "<br>";
        echo "Hobbies seleccionados: " . implode(", ", $hobbies);
    } else {
    ?>
        <form name="input" action="214_formulario4.php" method="post">
            <label for="nombre">Nombre:</label>
            <input type="text" name="nombre" id="nombre"><br>

            <label for="hobbies">Hobbies:</label><br />
            <input type="checkbox" name="hobbies[]" value="Futbol">Futbol</option><br />
            <input type="checkbox" name="hobbies[]" value="Baloncesto">Baloncesto</option><br />
            <input type="checkbox" name="hobbies[]" value="Tenis">Tenis</option><br />
            <input type="checkbox" name="hobbies[]" value="Natacion">Natacion</option><br />
            <input type="checkbox" name="hobbies[]" value="Ciclismo">Ciclismo</option><br />
            <input type="checkbox" name="hobbies[]" value="Atletismo">Atletismo</option><br />
            <br>
            <input type="submit" name="enviar" value="Enviar">
        </form>
    <?php
    }
    ?>
</body>