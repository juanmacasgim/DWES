<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>210_arrays</title>
</head>

<body>
    <h2>Arrays</h2>
    <?php
    // array numérico
    $modulos1 = array(0 => "Programación", 1 => "Bases de datos", 2 => "Entornos de desarrollo", 3 => "Sistemas informáticos", 4 => "FOL");
    // array asociativo
    $modulos2 = array("DWES" => "Desarrollo web en entorno servidor", "DWEC" => "Desarrollo web en entorno cliente", "DIW" => "Diseño de interfaces web", "DAW" => "Despliegue de aplicaciones web", "EIE" => "Empresa e iniciativa emprendedora");

    print_r($modulos2);
    print "<br> ARRAY MODULOS1: " . $modulos1[0];
    ?>

    <h2>Arrays multidimensionales</h2>
    <?php
    $ciclos = array(
        "DAW" => array("PR" => "Programación", "BD" => "Base de datos", "DWES" => "Desarrollo web en entorno servidor"),
        "DAM" => array("PR" => "Programación", "BD" => "Base de datos", "PMDM" => "Programación multimedia y dispositivos móviles")
    );
    print_r($ciclos);
    ?>

    <h2>Clave por defecto</h2>
    <?php
    $modulos1[] = "Desarrollo web en entorno servidor";
    print_r($modulos1);
    ?>

    <h2>Recorrer Arrays (foreach)</h2>
    <h3>Foreach</h3>
    <?php
    $modulos = array("PR" => "Programación", "BD" => "Base de datos", "DWES" => "Desarrollo web en entorno servidor");
    foreach ($modulos as $valor) {
        print "Módulo: " . $valor . "<br>";
    }
    ?>
    <h3>Foreach con clave valor</h3>
    <?php
    foreach ($modulos as $clave => $valor) {
        print "El código del módulo: " . $clave . " es " . $valor . "<br>";
    }
    ?>

    <h2>Foreach $_SERVER</h2>
    <table>
        <tr>
            <th>Clave</th>
            <th>Valor</th>
        </tr>

        <?php 
        $server = $_SERVER;
        foreach ($_SERVER as $clave => $valor) : ?>
            <tr>
                <td><?php echo $clave; ?></td>
                <td><?php echo $valor; ?></td>
            </tr>
        <?php endforeach; ?>
    </table>

    <h2>Funciones para recorrer Arrays</h2>
    <h3>Recorre el array con next() y current()<br></h3>
    <?php
    $deportes = array("BL" => "Baloncesto", "FT" => "Fútbol", "AT" => "Atletismo", "TN" => "Tenis");
    while ($valor = current($deportes)) {
        print "Deporte: " . $valor . "<br>";
        next($deportes);
    }
    ?>
    <h3>Recorre el array con prev() y end()</h3>
    <?php
        end($deportes);
        while ($valor = current($deportes)) {
            print "Deporte: " . $valor . "<br>";
            prev($deportes);
        }
    ?>

    <h2>Funciones datos compuestos</h2>
    <h3>Unset</h3>
    <?php
        $a = array(); // array vacío
        $modulos = array("Programacion", "Bases de datos", "Entornos de desarrollo", "Sistemas informaticos", "FOL"); // array numérico
        print_r($modulos);print "<br>";
        unset($modulos[0]); // elimina el primer elemento del array
        print_r($modulos);print "<br>";
    ?>
    <h3>Isarray</h3>
    <?php
    $modulos = array("Programacion", "Bases de datos", "Entornos de desarrollo", "Sistemas informaticos", "FOL"); // array numérico
    print is_array($modulos); // devuelve true si $modulos es un array
    ?>

    <h3>Search</h3>
    <?php
    $modulos = array("Programacion", "Bases de datos", "Entornos de desarrollo", "Sistemas informaticos", "FOL"); // array numérico
    $modulo = "Bases de datos";
    if (in_array($modulo, $modulos)) {
        print "El módulo " . $modulo . " está en el array";
    } else {
        print "El módulo " . $modulo . " no está en el array";
    }
    ?>
</body>