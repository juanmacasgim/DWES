<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Consultas con modelos</title>
</head>

<body>
    <?php
    include 'config/database.inc.php';

    class Producto {
        private string $codigoarticulo;
        private string $seccion;
        private string $nombrearticulo;
        private ?string $precio;
        private ?string $fecha;
        private ?string $importado;
        private ?string $paisdeorigen;

        public function getCodigo(): string { return $this->codigoarticulo; }
        public function getSeccion(): string { return $this->seccion; }

        public function getNombre(): string { return $this->nombrearticulo; }

        public function getPrecio(): ?string { return $this->precio; }

        public function getFecha(): ?string { return $this->fecha; }

        public function getImportado(): ?string { return $this->importado; }

        public function getPais(): ?string { return $this->paisdeorigen; }

    }

    $conexion = null;

    // 2. Conexión a la base de datos
    try {
        $conexion = new PDO(DNS, USER, PASSWORD);
        $conexion->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

        $consulta = "SELECT * FROM productos";
        
        $sentencia = $conexion->prepare($consulta);
        $sentencia->setFetchMode(PDO::FETCH_CLASS, 'Producto'); 
        $sentencia->execute();

        echo "<table>";
        echo "<tr><th>Codigo</th><th>Seccion</th><th>Nombre</th><th>Precio</th><th>Fecha</th><th>Importado</th><th>Pais de Origen</th></tr>";
        while ($fila = $sentencia->fetch()) {
            
            echo "<tr>";
            echo "<td>" . $fila -> getCodigo() . "</td>";
            echo "<td>" . $fila -> getSeccion() . "</td>";
            echo "<td>" . $fila -> getNombre() . "</td>";
            echo "<td>" . $fila -> getPrecio() . "</td>";
            echo "<td>" . $fila -> getFecha() . "</td>";
            echo "<td>" . $fila -> getImportado() . "</td>";
            echo "<td>" . $fila -> getPais() . "</td>";
            echo "</tr>";
            
        }

    } catch (PDOException $e) {
        echo $e->getMessage();
    }
    ?>
</body>

</html>