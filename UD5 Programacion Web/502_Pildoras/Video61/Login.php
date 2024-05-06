<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>

    <style>
        h1 {
            text-align: center;
        }

        table {
            width: 25%;
            background-color: #FFC;
            border: 2px dotted #F00;
            margin: 0 auto;
        }

        .izq {
            text-align: right;
        }

        .der {
            text-align: left;
        }

        td {
            text-align: center;
            padding: 10px;
        }
    </style>
</head>

<body>

<h1>Introduce tus datos</h1>

<form action="Comprueba_login.php" method="post">
    <table>
        <tr>
            <td class="izq">Usuario:</td>
            <td class="der"><input type="text" name="login"></td>
        </tr>
        <tr>
            <td class="izq">Contraseña:</td>
            <td class="der"><input type="password" name="password"></td>
        </tr>
        <tr>
            <td colspan="2"><input type="submit" name="enviar" value="Login"></td>
        </tr>
    </table>
</body>
</html>