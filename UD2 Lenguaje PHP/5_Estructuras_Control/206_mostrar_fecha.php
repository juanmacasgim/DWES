<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>206_mostrar_fecha</title>
</head>

<body>
    <?php
    setlocale(LC_TIME, 'es_VE.UTF-8','esp');
    echo strftime('%A %e de %B de %Y') 
    ?>
</body>

</html>