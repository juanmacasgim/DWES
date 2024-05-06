<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cabeceras Respuesta</title>
</head>

<body>
    <?php
    header("Expires: Sun, 31 Jan 2021 23:59:59 GMT");
    // tres horas
    $now = time();
    $horas3 = gmstrftime("%a, %d %b %Y %H:%M:%S GMT", $now + 60 * 60 * 3);
    header("Expires: {$horas3}");
    // un año
    $now = time();
    $anyo1 = gmstrftime("%a, %d %b %Y %H:%M:%S GMT", $now + 365 * 86440);
    header("Expires: {$anyo1}");
    // se marca como expirado (fecha en el pasado)
    $pasado = gmstrftime("%a, %d %b %Y %H:%M:%S GMT");
    header("Expires: {$pasado}");
    // evitamos cache de navegador y/o proxy
    header("Expires: Mon, 26 Jul 1997 05:00:00 GMT");
    header("Last-Modified: " . gmdate("D, d M Y H:i:s") . " GMT");
    header("Cache-Control: no-store, no-cache, must-revalidate");
    header("Cache-Control: post-check=0, pre-check=0", false);
    header("Pragma: no-cache");
    ?>
    <?php header("Content-Type: text/plain"); ?>
    <?php header("Location: http://www.juanmariacastillogimenez.com/");
    exit(); ?>
</body>

</html>