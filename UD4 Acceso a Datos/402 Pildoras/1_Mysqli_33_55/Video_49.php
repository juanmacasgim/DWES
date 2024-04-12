<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Video_49</title>

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

        $Nombre=$_GET["Nombre"];

        require("datos_conexion.php");

        try {
            $conexion = new mysqli($db_host, $db_usuario, $db_contra, $db_nombre);
        } catch (mysqli_sql_exception $e) {
            echo "Error al conectar a la BBDD: " . $e->getMessage();
            exit();
        }

        mysqli_set_charset($conexion, "utf8");

        // 1. Crear la consulta
        $consulta = "SELECT * FROM datospersonales WHERE Nombre = ?";

        // 2. Preparar la consulta
        $resultado = mysqli_prepare($conexion, $consulta);

        // 3. Unir los parámetros y validarlos
        $validar = mysqli_stmt_bind_param($resultado, "s", $Nombre);

        // 4. Ejecutar la consulta
        $validar = mysqli_stmt_execute($resultado);

        if($validar == false){
            echo "Error al ejecutar la consulta";
        }else{
            // 5. Asociar las variables
            $validar = mysqli_stmt_bind_result($resultado, $DNI, $Nombre, $Apellido, $Edad, $Ciudad);

            echo "Registros encontrados: <br><br>";

            // 6. Leer los resultados
            while(mysqli_stmt_fetch($resultado)){
                echo "<table width='50%' aling='center' boder='1'><tr><td>";
            echo $DNI . "</td><td>";
            echo $Nombre . "</td><td>";
            echo $Apellido . "</td><td>";
            echo $Edad . "</td><td>";
            echo $Ciudad . "</td><td>";
            echo "</tr></table><br>";
            }
        }

        mysqli_stmt_close($resultado);
        
    ?>
</body>

</html>