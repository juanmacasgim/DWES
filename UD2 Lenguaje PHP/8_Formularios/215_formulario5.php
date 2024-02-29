<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>215_formulario5</title>
</head>

<body>
<?php
    if (!empty($_POST['nombre']) && !empty($_POST['hobbies'])){
        $nombre = $_POST['nombre'];
        $hobbies = $_POST['hobbies']; // Array con las opciones seleccionadas
        echo "Nombre: " . $nombre . "<br>";
        echo "Hobbies seleccionados: " . implode(", ", $hobbies);
    } else {
    ?>
        <form name="input" action="<?php echo $_SERVER['PHP_SELF'];?>" method="post">
            <label for="nombre">Nombre:</label>
            <input type="text" name="nombre" value="<?php if (isset($_POST['nombre'])) echo $_POST['nombre'];?>"/><br>

            <label for="hobbies">Hobbies:</label><br />

            <input type="checkbox" name="hobbies[]" value="Futbol"
                <?php
                    if (isset($_POST['hobbies']) && in_array("Futbol", $_POST['hobbies'])) 
                    echo "checked";
                ?>
            >Futbol</option><br />
            <input type="checkbox" name="hobbies[]" value="Baloncesto"
                <?php
                    if (isset($_POST['hobbies']) && in_array("Baloncesto", $_POST['hobbies'])) 
                    echo "checked";
                ?>
            >Baloncesto</option><br />
            <input type="checkbox" name="hobbies[]" value="Tenis"
                <?php
                    if (isset($_POST['hobbies']) && in_array("Tenis", $_POST['hobbies'])) 
                    echo "checked";
                ?>
            >Tenis</option><br />
            <input type="checkbox" name="hobbies[]" value="Natacion"
                <?php
                    if (isset($_POST['hobbies']) && in_array("Natacion", $_POST['hobbies'])) 
                    echo "checked";
                ?>
            >Natacion</option><br />
            <input type="checkbox" name="hobbies[]" value="Ciclismo"
                <?php
                    if (isset($_POST['hobbies']) && in_array("Ciclismo", $_POST['hobbies'])) 
                    echo "checked";
                ?>
            >Ciclismo</option><br />
            <input type="checkbox" name="hobbies[]" value="Atletismo"
                <?php
                    if (isset($_POST['hobbies']) && in_array("Atletismo", $_POST['hobbies'])) 
                    echo "checked";
                ?>
            >Atletismo</option><br />
            <br>
            <input type="submit" name="enviar" value="Enviar">
        </form>
    <?php
    }
    ?>
</body>