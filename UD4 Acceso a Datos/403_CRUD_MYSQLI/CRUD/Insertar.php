<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Insertar</title>

    <style>
        h1 {
            text-align: center;
            width: 50%;
        }

        table {
            border: 1px solid #F00;
            padding: 20px 50px;
            margin-top: 50px
        }

        body {
            display: flex;
            flex-direction: column;
            align-content: center;
            align-items: center;
        }
    </style>
</head>

<body>
    <?php
        //Obtenemos los datos del formulario
        $dni=$_GET["DNI"];
        $nombre=$_GET["Nombre"];
        $apellido=$_GET["Apellido"];
        $edad=$_GET["Edad"];
        $direccion=$_GET["Direccion"];
        $localidad=$_GET["Localidad"];
        $provincia=$_GET["Provincia"];
        $cp=$_GET["CP"];
        $telefono=$_GET["Telefono"];

        //Obtenemos los datos de la conexion
        require("../src/Conexion.php");

        try {
            //Realizamos la conexion
            $conexion = new mysqli($db_host, $db_usuario, $db_contra, $db_nombre);
        } catch (mysqli_sql_exception $e) {
            echo "Error al conectar a la BBDD: " . $e->getMessage();
            exit();
        }

        mysqli_set_charset($conexion, "utf8");

        //Generamos la consulta
        $consulta = "INSERT INTO `datosclientes`(`DNI`, `Nombre`, `Apellido`, `Edad`, `Direccion`, `Localidad`, `Provincia`, `CP`, `Telefono`) 
                    VALUES ('$dni','$nombre','$apellido','$edad','$direccion','$localidad','$provincia','$cp','$telefono')";
        
        //Ejecutamos la consulta
        $resultados = mysqli_query($conexion, $consulta);
        
        if($resultados==false){
            echo "Error en la consulta";
        }else{
            //Mostramos los datos
            echo("
            <h1>Registro guardado</h1>
            <table>
                <tr>
                    <td>DNI</td><td>$dni</td>
                </tr>
                <tr>
                    <td>Nombre</td><td>$nombre</td>
                </tr>
                <tr>
                    <td>Apellido</td><td>$apellido</td>
                </tr>
                <tr>
                    <td>Edad</td><td>$edad</td>
                </tr>
                <tr>
                    <td>Direccion</td><td>$direccion</td>
                </tr>
                <tr>
                    <td>Localidad</td><td>$localidad</td>
                </tr>
                <tr>
                    <td>Provincia</td><td>$provincia</td>
                </tr>
                <tr>
                    <td>CP</td><td>$cp</td>
                </tr>
                <tr>
                    <td>Telefono</td><td>$telefono</td>
                </tr>
            </table>");
        }

        mysqli_close($conexion);
    ?>
</body>

</html>