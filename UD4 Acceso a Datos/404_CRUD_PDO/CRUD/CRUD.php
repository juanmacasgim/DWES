<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="../src/hoja.css">
    <title>CRUD</title>

    <style>

    </style>
</head>

<body>
<?php
    include '../src/Conexion.php';

    $consulta = "SELECT DNI, Nombre, Apellido, Edad, Direccion FROM `datosclientes`";

    $resultado = $conexion->prepare($consulta);

    $resultado->execute();

    $registros=$resultado->fetchAll(PDO::FETCH_OBJ);

    if(isset($_POST["cr"])){
        $Dni = $_POST["DNI"];
        $Nombre = $_POST["Nombre"];
        $Apellido = $_POST["Apellido"];
        $Edad = $_POST["Edad"];
        $Direccion = $_POST["Direccion"];

        $consulta = "INSERT INTO `datosclientes` SET `DNI`=:DNI, `Nombre`=:Nombre, `Apellido`=:Apellido, `Edad`=:Edad, `Direccion`=:Direccion";
        $resultado = $conexion->prepare($consulta);
        $resultado->execute(array(":DNI"=>$Dni, ":Nombre"=>$Nombre, ":Apellido"=>$Apellido, ":Edad"=>$Edad, ":Direccion"=>$Direccion));
        header("Location:CRUD.php");
    }

?>

<form action="<?php echo $_SERVER['PHP_SELF'];?>" method="post">
    <table width="50%" border="0" align="center">
        <tr>
            <td class="primera_fila">DNI</td>
            <td class="primera_fila">Nombre</td>
            <td class="primera_fila">Apellido</td>
            <td class="primera_fila">Edad</td>
            <td class="primera_fila">Dirección</td>
            <td class="sin">&nbsp;</td>
            <td class="sin">&nbsp;</td>
            <td class="sin">&nbsp;</td>
        </tr>

        <?php
            foreach ($registros as $persona):?>

        <tr>
            <td><?php echo $persona->DNI?></td>
            <td><?php echo $persona->Nombre?></td>
            <td><?php echo $persona->Apellido?></td>
            <td><?php echo $persona->Edad?></td>
            <td><?php echo $persona->Direccion?></td>
            <td class="bot"><a href="Eliminar.php?DNI=<?php echo $persona->DNI?>"><input type='button' name='del' id='del' value='Borrar'></a></td>
            <td class='bot'><a href="Editar.php?DNI=<?php echo $persona->DNI?> & 
            Nombre=<?php echo $persona->Nombre?> &
            Apellido=<?php echo $persona->Apellido?> &
            Edad=<?php echo $persona->Edad?> &
            Direccion=<?php echo $persona->Direccion?>"><input type='button' name='up' id='up' value='Actualizar'></a></td>
        </tr>

        <?php
        endforeach;
        ?>
        
        <tr>
            <td><input type='text' name='DNI' size='10' class='centrado'></td>
            <td><input type='text' name='Nombre' size='10' class='centrado'></td>
            <td><input type='text' name='Apellido' size='10' class='centrado'></td>
            <td><input type='text' name='Edad' size='10' class='centrado'></td>
            <td><input type='text' name='Direccion' size='10' class='centrado'></td>
            
            <td class='bot'><input type='submit' name='cr' id='cr' value='Insertar'></td>
        </tr>
    </table>
</form>
    <p>&nbsp;</p>
</body>

</html>