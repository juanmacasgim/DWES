<?php
/*
    Información:  Conexión a BBDD utilizando Clases POO. Vídeo 57
    Enlace a video:    https://www.youtube.com/watch?v=tA40GGmzrKY
    Finalidad ejercicio:  
    Alumno:
*/
?>
<?php
    require ("Conexion.php");

    class DevuelveProductos extends Conexion{
        //Funcion heredada de su clase padre la cual es Conexion
        public function __construct(){
            parent::__construct();
        }

        //Funcion a parte para obtener todos las tuplas de la tabla productos
        public function get_productos(){
            $resultado = $this->conexion_db->query('SELECT * FROM productos');
            $productos = $resultado->fetch_all(MYSQLI_ASSOC);
            return $productos;
        }
    }
?>