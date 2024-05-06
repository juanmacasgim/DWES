<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Autentificacion de usuarios</title>
</head>

<body>
    <form action='05_1_Autentificacion_Login.php' method='post'>
        <fieldset>
            <legend>Login</legend>
            <div><span class='error'><?php echo $error; ?></span></div>
            <div class='fila'>
                <label for='usuario'>Usuario:</label><br />
                <input type='text' name='inputUsuario' id='usuario' maxlength="50" /><br />
            </div>
            <div class='fila'>
                <label for='password'>Contraseña:</label><br />
                <input type='password' name='inputPassword' id='password' maxlength="50" /><br />
            </div>
            <div class='fila'>
                <input type='submit' name='enviar' value='Enviar' />
            </div>
        </fieldset>
    </form>
</body>

</html>