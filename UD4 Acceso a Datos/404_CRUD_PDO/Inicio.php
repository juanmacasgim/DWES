<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>CRUD PDO</title>

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
    <table>
        <tr>
            <td>Create</td>
            <td>Read</td>
            <td>Update</td>
            <td>Delete</td>
        <tr>
            <td>
                <form action="CRUD/Formulario_Insercion.php">
                    <input type="submit" name="enviando" value="Insertar">
                </form>
            </td>
            <td>
                <form action="CRUD/Formulario_Busqueda.php">
                    <input type="submit" name="enviando" value="Buscar">
                </form>
            </td>
            <td>
                <form action="CRUD/Formulario_Actualizacion.php">
                    <input type="submit" name="enviando" value="Actualizar">
                </form>
            </td>
            <td>
                <form action="CRUD/Formulario_Eliminacion.php">
                    <input type="submit" name="enviando" value="Eliminar">
                </form>
            </td>
        </tr>
    </table>
</body>

</html>