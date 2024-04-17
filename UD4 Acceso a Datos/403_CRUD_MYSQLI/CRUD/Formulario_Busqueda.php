<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formulario_Busqueda</title>

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
    <h1>CRUD con MySQLi</h1>
    <form action="Buscar.php" method="get">
        <label for="buscar">
            <table>
                <tr>
                    <td>DNI</td>
                    <td><input type="text" name="DNI"></td>
                </tr>
        </label>
        <tr>
            <td></td>
            <td>
                <input type="submit" name="enviando" value="Buscar">
            </td>
        </tr>
        </table>
    </form>
</body>

</html>