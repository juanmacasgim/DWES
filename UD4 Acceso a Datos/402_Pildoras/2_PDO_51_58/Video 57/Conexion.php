<?php
/*
    Información:  Conexión a BBDD utilizando Clases POO. Vídeo 57
    Enlace a video:    https://www.youtube.com/watch?v=tA40GGmzrKY
    Finalidad ejercicio:  Conexión a BBDD utilizando Programación Orientada a Objetos.
    Alumno: Juan María Castillo Giménez
*/
?>
<?php
    require ("config.php");
    class Conexion{
        protected $conexion_db;

        //Constructor por defecto para esta clase llamada conexion.
        public function __construct(){
            //Por defecto utiliza la configuracion por defecto para crear la conexion.
            $this->conexion_db=new mysqli(DB_HOST, DB_USUARIO, DB_CONTRA, DB_NOMBRE );

            //Condicional para que en caso de error nos los indique
            if ($this->conexion_db->connect_errno) {
                echo "Fallo al conectar a MySql: " . $this->conexion_db -> connect_error;
                return;
            }

            //Seteo de los caracteres a utilizar.
            $this->conexion_db->set_charset(DB_CHARSET);
        }
    }
?>