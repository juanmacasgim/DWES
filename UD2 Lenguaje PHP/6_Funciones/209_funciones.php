<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>209_funciones</title>
</head>

<body>
    <h2>Funciones</h2>
    <?php
    // Funciones
    function precioConIVA()
    {
        global $preciomovil;
        $precioiva = $preciomovil * 1.21;
        print "El precio del movil con IVA es: $precioiva";
    }
    $preciomovil = 300;
    print "El precio sin IVA es: $preciomovil<br>";
    precioConIVA();
    ?>


    <!-- --------------------------------------------------------     -->
    <h2>Funciones condicionales</h2>
    <?php
    // Funciones condicionales
    $iva = true;
    $precio = 10;
    if ($iva) {
        function precioConIVA_condi()
        {
            global $precio;
            $precioiva = $precio * 1.21;
            print "El precio con IVA es: $precioiva";
        }
    }
    print "El precio sin IVA es: $precio<br>";
    precioConIVA_condi();
    ?>


    <!-- --------------------------------------------------------     -->
    <h2>Funciones con argumentos</h2>
    <?php
    // Funciones con argumentos
    function precioConIVA_arg($precio)
    {
        return $precio * 1.21;
    }
    $precio_arg = 30;
    print "El precio sin IVA es: $precio_arg<br>";
    $preciofinal_arg = precioConIVA_arg($precio_arg);
    print "El precio final con IVA es: $preciofinal_arg";
    ?>


    <!-- --------------------------------------------------------     -->
    <h2>Funciones con argumentos por defecto</h2>
    <?php
    // Funciones con argumentos por defecto
    function precioConIVA_arg_default($precio, $iva = 0.21)
    {
        return $precio * (1 + $iva);
    }
    $precio_arg_def = 50;
    print "El precio sin IVA es: $precio_arg_def<br>";
    $preciofinal_arg_def = precioConIVA_arg_default($precio_arg_def);
    print "El precio final con IVA es: $preciofinal_arg_def";
    ?>

    
    <!-- --------------------------------------------------------     -->
    <h2>Funciones con argumentos por defecto y referencia</h2>
    <?php
    // Funciones con argumentos por defecto
    function precioConIVA_arg_default_ref(&$precioref, $iva = 0.21)
    {
        $precioref *= (1 + $iva);
    }
    $precioref = 70;
    print "El precio sin IVA es: $precioref<br>";
    precioConIVA_arg_default_ref($precioref);
    print "El precio final con IVA es: $precioref";
    ?>
</body>

</html>