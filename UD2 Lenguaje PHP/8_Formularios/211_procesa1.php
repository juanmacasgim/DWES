<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>211_procesa1</title>
</head>

<body>
    <?php
    $nombre = $_POST['nombre'];
    $hobbies = $_POST['hobbies']; // Array con las opciones seleccionadas
    echo "Nombre: " . $nombre . "<br>";
    echo "Hobbies seleccionados: " . implode(", ", $hobbies);
    ?>
</body>