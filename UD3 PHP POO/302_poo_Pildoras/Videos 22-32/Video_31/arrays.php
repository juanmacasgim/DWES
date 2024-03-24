<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>concesionario</title>
</head>

<body>
    <?php

    $datos=array("Nombre"=>"Juan","Apellido"=>"Gomez","Edad"=>25); //Es un array asociativo
    $datos['Pais']="España"; //Añadimos un nuevo elemento al array

    //$datos="Juan"; //No es un array

    //Con este bucle recorremos el array y mostramos los valores
    foreach ($datos as $clave => $valor) {
        echo "A $clave le corresponde $valor<br>";
    }

    //Con este condicional comprobamos si la variable $datos es un array o no
    if (is_array($datos)) {
        echo "Es un array<br>";
    } else {
        echo "No es un array<br>";
    }

    //Array indexado
    $semana[]="Lunes";
    $semana[]="Martes";
    $semana[]="Miercoles";
    $semana[]= "Jueves";

    for($i=0;$i<count($semana);$i++){
        echo $semana[$i]."<br>";
    }
    ?>
</body>

</html>