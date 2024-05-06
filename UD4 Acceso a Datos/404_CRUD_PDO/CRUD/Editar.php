<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Insertar</title>
    <link rel="stylesheet" type="text/css" href="../src/hoja.css">
</head>


<body>

    <h1>ACTUALIZAR</h1>

    <?php
    require("../src/Conexion.php");
    if(!isset($_POST["bot_actualizar"])){
        $DNI = $_GET["DNI"];
        $Nombre = $_GET["Nombre"];
        $Apellido = $_GET["Apellido"];
        $Edad = $_GET["Edad"];
        $Direccion = $_GET["Direccion"];
    } else {
        $DNI = $_POST["DNI"];
        $Nombre = $_POST["Nombre"];
        $Apellido = $_POST["Apellido"];
        $Edad = $_POST["Edad"];
        $Direccion = $_POST["Direccion"];

        $consulta = "UPDATE `datosclientes` SET `Nombre`=:Nombre, 
        `Apellido`=:Apellido, `Edad`=:Edad, `Direccion`=:Direccion 
        WHERE `DNI`=:DNI";
        $resultado = $conexion->prepare($consulta);
        $resultado->execute(array(":DNI"=>$DNI, ":Nombre"=>$Nombre, 
        ":Apellido"=>$Apellido, ":Edad"=>$Edad, ":Direccion"=>$Direccion));
        header("Location:CRUD.php");
    }
    ?>
    <p>

    </p>
    <p>&nbsp;</p>
    <form name="form1" method="post" action="<?php echo $_SERVER['PHP_SELF']; ?>">
        <table width="25%" border="0" align="center">
            <tr>
                <td>DNI</td>
                <td><label for="DNI"></label>
                    <input type="hidden" name="DNI" id="DNI" value="<?php echo $DNI?>"></td>
            </tr>
            <tr>
                <td>Nombre</td>
                <td><label for="Nombre"></label>
                    <input type="text" name="Nombre" id="Nombre" value="<?php echo $Nombre ?>"></td>
            </tr>
            <tr>
                <td>Apellido</td>
                <td><label for="Apellido"></label>
                    <input type="text" name="Apellido" id="Apellido" value="<?php echo $Apellido ?>"></td>
            </tr>
            <tr>
                <td>Edad</td>
                <td><label for="Edad"></label>
                    <input type="text" name="Edad" id="Edad" value="<?php echo $Edad ?>"></td>
            </tr>
            <tr>
                <td>Dirección</td>
                <td><label for="Direccion"></label>
                    <input type="text" name="Direccion" id="Direccion" value="<?php echo $Direccion ?>"></td>
            </tr>
            <tr>
                <td colspan="2"><input type="submit" name="bot_actualizar" id="bot_actualizar" value="Actualizar"></td>
            </tr>
        </table>
    </form>
    <p>&nbsp;</p>
</body>



</html>