<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>poo</title>
</head>

<body>
    <?php
    //Importacion (Include) de la clase de coche la cual se encuentra en un archivo externo.
    //Clase con la cual se crearan objetos. Disponiendo de tres variables para todos los objetos creados. (Coche)
    //Funciones la cual se ejecutan al llamarlas mediante un objeto creado.

        include("vehiculos.php");

        //Instanciación de la clase Coche
        $renault = new Coche(); //Estado inicial al objeto
        $mazda = new Coche();
        $seat = new Coche();

        $mazda->girar(); //Llamada a un método
        echo $mazda->ruedas; //Llamada a una variable
    ?>
    
</body>

</html>