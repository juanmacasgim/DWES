<!-- Resumen 1 realizado por Juan María Castillo Giménez -->
<html>

<head>
    <title>Resumen Unidad 1 - Arquitecturas WEB</title>
</head>

<body>
    <!-- Con las etiquetas php podemos crear eventos -->
    <!-- En este caso muestra el texto que se ha declarado -->
    <?php 
    echo "Probando PHP";
    ?>

    <?php
    /* Se pueden declarar variables fuera de las funciones */
    $a = 42;
    $b = 1.82;
    function variables() {
        /* Para poder usar una variable de fuera de una función
        tenemos que declararla dentro de la misma con un global
        delante del nombre de la variable*/
        global $b;

        /* $edad = $a; este ejemplo no serviría ya que no hemos declarado
        $a como global, por lo tanto es como si lo declarásemos por primera
        vez y va a estar a null */

        //Esto es una cadena
        $nombre = "Juan Maria Castillo Gimenez";
        //Esto es un int
        $edad = 22;
        //Esto es un real
        $altura = $b;
        //Esto es un boolean
        $extranjero = false;
        //Y este campo está a null
        $antecedentes = null;
        echo "Nombre:",$nombre, ", Edad:", $edad,", Altura:", $altura," ";
    };

    function cuenta(){
        /* También podemos hacer operaciones */
        global $a, $b;

        $c = $a + $b;
        echo "",$c;
    };
    ?>
    
    <?php 
        /* Aqui ejecutamos las funciones*/
        variables();
        cuenta();
    ?>
</body>