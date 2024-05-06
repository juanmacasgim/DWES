<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
</head>

<body>
    <h1>Introduce tus datos</h1>

    <form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="post">
        <table>
            <tr>
                <td class="izq">Usuario:</td>
                <td class="der"><input type="text" name="user"></td>
            </tr>
            <tr>
                <td class="izq">Contraseña:</td>
                <td class="der"><input type="password" name="password"></td>
            </tr>
            <tr>
                <td class="izq">Recordar Sesión:</td>
                <td colspan="der"><input type="checkbox" name="recordar" value=""></td>
            </tr>
            <tr>
                <td colspan="2"><input type="submit" name="enviar" value="Login"></td>
            </tr>
        </table>
    </form>
</body>

</html>