<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>205_control</title>
</head>

<body>
    <form method="get">
        <div style="display: flex;">
            <label style="width: 20%;">
                Nombre:
            </label>
            <input type="text" name="nombre"><br>
        </div>
        <div style="display: flex;">
            <label style="width: 20%;">
                Genero:
            </label>
            <select name="genero" id="genero">
                <option value="1">Masculino</option>
                <option value="2">Femenino</option>
                <option value="3">Indefinido</option>
            </select>
        </div>
        <div style="display: flex;">
            <label style="width: 20%;">
                Edad:
            </label>
            <input type="number" name="edad"><br>
        </div>
        <input type="submit" value="Enviar">
    </form>

    <?php
    $nombre = $_GET['nombre'];
    $genero = $_GET['genero'];
    $edad = $_GET['edad'];
    ?>

    <h2>if, elseif, else y operadores ternarios</h2>
    <?php
    global $nombre;
    global $edad;
    if ($nombre == 'admin') {
        echo "Hola de nuevo señor Stark<br>";
    } else if ($nombre != null) {
        echo "Bienvenido/a ", $nombre, "<br>";
    } else {
        echo "Nombre no introducido<br>";
    }
    
    ?>

    <h2>switch</h2>
    <?php
    global $genero;
    switch ($genero) {
        case 1:
            echo "Has seleccionado Masculino.";
            break;
        case 2:
            echo "Has seleccionado Femenino.";
            break;
        case 3:
            echo "Has seleccionado Indefinido.";
            break;
        default:
            echo "Selección no válida.";
    }
    echo ($edad >= 18) ? "Eres mayor de edad" : "Eres menor de edad";
    ?>


    <h2> while, dowhile, for</h2>
    <?php
    /** Aqui he creado la secuencia de fibonnachi, en resumen es una cuenta matemática en el que vas sumando dos números
     * el numero anterior y el nuevo por ejemplo tenemos anterior que es 0 y el nuevo es 1.
     * 0 + 1 = 1 ahora el 1 se convierte en el nuevo numero y el 1 en el anterior
     * 1 + 1 = 2 ahora el 2 se convierte en el nuevo numero y el 1 en el anterior
     * 1 + 2 = 3 ahora el 3 se convierte en el nuevo numero y el 2 en el anterior
     * 2 + 3 = 5 ahora el 5 se convierte en el nuevo numero y el 3 en el anterior
     * 3 + 5 = 8 ahora el 8 se convierte en el nuevo numero y el 5 en el anterior...
     */
    global $edad;
    $i = 0;
    $anterior = 0;
    $nuevo = 1;
    $final;
    $contador = 0;
    while ( $i < $edad ) {
        $anterior;
        $nuevo; 
        $final = $anterior + $nuevo;
        $anterior = $nuevo;
        $nuevo = $final;
        $i++;
    }
    echo "Tu secuencia de fibacchi con tu edad termina en: ", $final, "<br>"; 

    $i2 = 0;
    $anterior2 = 0;
    $nuevo2 = 1;
    $final2;
    $contador2 = 0;
    do {
        $anterior2;
        $nuevo2; 
        $final2 = $anterior2 + $nuevo2;
        $anterior2 = $nuevo2;
        $nuevo2 = $final2;
        $i2++;
    } while ($i2 < $edad);
    echo "Tu secuencia de fibacchi con tu edad termina en: ", $final2, "<br>";

    $i3 = 0;
    $anterior3 = 0;
    $nuevo3 = 1;
    $final3;
    $contador3 = 0;
    for ($i3 = 0; $i3 < $edad; $i3++) {
        $anterior3;
        $nuevo3; 
        $final3 = $anterior3 + $nuevo3;
        $anterior3 = $nuevo3;
        $nuevo3 = $final3;
    }
    echo "Tu secuencia de fibacchi con tu edad termina en: ", $final3, "<br>";
    ?>


</body>

</html>