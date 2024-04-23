<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Eliminar</title>
    <link rel="stylesheet" type="text/css" href="../src/hoja.css">
</head>

<body>
    <?php
    $dni = $_GET["DNI"];

    require("../src/Conexion.php");

    $consulta = "DELETE FROM `datosclientes` WHERE `DNI`=:DNI";
    $resultado = $conexion->prepare($consulta);
    $resultado->execute(array(":DNI"=>$dni));
    header("Location:CRUD.php");
    ?>
</body>

</html>