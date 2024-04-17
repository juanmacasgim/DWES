<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formulario_Insercion</title>

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
    <h1>CRUD con PDO</h1>
    <form action="Insertar.php" method="get">
        <label for="insertar">
            <table>
                <tr>
                    <td>DNI</td>
                    <td><input type="text" name="DNI"></td>
                </tr>
                <tr>
                    <td>Nombre</td>
                    <td><input type="text" name="Nombre"></td>
                </tr>
                <tr>
                    <td>Apellido</td>
                    <td><input type="text" name="Apellido"></td>
                </tr>
                <tr>
                    <td>Edad</td>
                    <td><input type="text" name="Edad"></td>
                </tr>
                <tr>
                    <td>Direccion</td>
                    <td><input type="text" name="Direccion"></td>
                </tr>
                <tr>
                    <td>Localidad</td>
                    <td><input type="text" name="Localidad"></td>
                </tr>
                <tr>
                    <td>Provincia</td>
                    <td><input type="text" name="Provincia"></td>
                </tr>
                <tr>
                    <td>CP</td>
                    <td><input type="text" name="CP"></td>
                </tr>
                <tr>
                    <td>Telefono</td>
                    <td><input type="text" name="Telefono"></td>
                </tr>
        </label>
        <tr>
            <td></td>
            <td>
                <input type="submit" name="enviando" value="Insertar">
            </td>
        </tr>
        </table>
    </form>
</body>

</html>