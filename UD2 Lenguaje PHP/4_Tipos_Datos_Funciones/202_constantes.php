<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>202_print</title>
</head>

<body>
    <?php
    // Variables definidas
    define("NOMBRE", "Juanma"); //Definimos un string
    printf("Mi nombre es %s", NOMBRE);

    define("EDAD", 22); //Definimos un entero
    printf("<br/> Mi edad es %d", EDAD);

    define("REPETIDOR", false); //Definimos un boolean (pero se imprimirá 0)
    printf("<br/> Soy repetidor? %b", REPETIDOR);

    define("ENFERMEDADES", ["asma", "alergia al polen"]); //Definimos un array
    
    // Variables predefinidas
    $carpeta = __DIR__; //Esto es la ruta del directorio
    printf("<br/> $carpeta");

    $archivo = __FILE__; //Esto es la ruta del archivo
    printf("<br/> $archivo");

    // Uso is_
    if (is_dir($archivo)) { //Este is_ comprueba si la variable que le 
        //estamos pasando es un directorio
        echo "<br/> Es un archivo.";
    } else {
        echo "<br/> No es un archivo.";
    }

    if (is_array(ENFERMEDADES)) { //Este is_ comprueba si la variable que le 
        //estamos pasando es un array
        echo "<br/> ENFERMEDADES es un array. Sus elementos son:";
        echo "<ul>";
        foreach (ENFERMEDADES as $enfermedad) {
            echo "<li>" . $enfermedad . "</li>"; // Mostrar cada enfermedad como un elemento de lista
        }
        echo "</ul>"; // Cerrar la lista ordenada
    } else {
        echo "<br/> ENFERMEDADES no es un array.";
    }
    ?>
</body>

</html>