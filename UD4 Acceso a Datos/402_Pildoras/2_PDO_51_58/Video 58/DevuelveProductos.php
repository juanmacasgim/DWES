<?php
/*
    Información:  Conexión a BBDD utilizando Clases POO. Vídeo 57
    Enlace a video:    https://www.youtube.com/watch?v=tA40GGmzrKY
    Finalidad ejercicio:  Conectarnos a la BBDD con PDO
    Alumno: Juan María Castillo Giménez
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
        public function get_productos($dato){
            $sql = "SELECT * FROM PRODUCTOS WHERE paisdeorigen= :PAIS";

            $consulta = $this->conexion_db->prepare($sql);
            $consulta->execute(array(':PAIS' => $dato));

            //$resultado = $this->conexion_db->query('SELECT * FROM productos');
            
            $productos = $consulta->fetchall(PDO::FETCH_ASSOC);
            return $productos;
        }
    }
?>