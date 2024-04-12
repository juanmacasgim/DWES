<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Video_50</title>

    <style>
        table {
            width: 50%;
            text-align: center;
            border: 1px solid black;
            margin: 0 auto;
        }
    </style>
</head>

<body>
    <?php
        $dni=$_GET["DNI"];
        $nombre=$_GET["Nombre"];
        $apellido=$_GET["Apellido"];
        $edad=$_GET["EDAD"];
        $ciudad=$_GET["Ciudad"];

        require("datos_conexion.php");

        try {
            $conexion = new mysqli($db_host, $db_usuario, $db_contra, $db_nombre);
        } catch (mysqli_sql_exception $e) {
            echo "Error al conectar a la BBDD: " . $e->getMessage();
            exit();
        }

        mysqli_set_charset($conexion, "utf8");

        // 1. Crear la consulta
        $consulta = "INSERT INTO datospersonales (DNI, Nombre, Apellido, EDAD, Ciudad) VALUES (?, ?, ?, ?, ?)";

        // 2. Preparar la consulta
        $resultado = mysqli_prepare($conexion, $consulta);

        // 3. Unir los parámetros y validarlos
        $validar = mysqli_stmt_bind_param($resultado, "sssis", $dni, $nombre, $apellido, $edad, $ciudad);

        // 4. Ejecutar la consulta
        $validar = mysqli_stmt_execute($resultado);

        if($validar == false){
            echo "Error al ejecutar la consulta";
        }else{
            echo "Registro agregado <br><br>";
        }

        mysqli_close($conexion);
    ?>
</body>

</html>