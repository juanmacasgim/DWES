<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>212_procesa2</title>
</head>

<body>
    <?php
    $nombre = $_GET['nombre'];
    $hobbies = $_GET['hobbies']; // Array con las opciones seleccionadas
    echo "Nombre: " . $nombre . "<br>";
    echo "Hobbies seleccionados: " . implode(", ", $hobbies);
    ?>
</body>