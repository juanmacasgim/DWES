<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>213_formulario3</title>
</head>

<body>
    <form name="input" action="213_procesa3.php" method="post">
        <label for="nombre">Nombre:</label>
        <input type="text" name="nombre" id="nombre"><br>

        <label for="hobbies">Hobbies:</label><br />
        <input type="checkbox" name="hobbies[]" value="Futbol">Futbol</option><br />
        <input type="checkbox" name="hobbies[]" value="Baloncesto">Baloncesto</option><br />
        <input type="checkbox" name="hobbies[]" value="Tenis">Tenis</option><br />
        <input type="checkbox" name="hobbies[]" value="Natacion">Natacion</option><br />
        <input type="checkbox" name="hobbies[]" value="Ciclismo">Ciclismo</option><br />
        <input type="checkbox" name="hobbies[]" value="Atletismo">Atletismo</option><br />
        <br>
        <input type="submit" value="Enviar">
    </form>
</body>