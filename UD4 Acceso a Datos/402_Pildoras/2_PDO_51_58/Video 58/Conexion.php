<?php
/*
    Información:  Conexión a BBDD utilizando Clases POO. Vídeo 57
    Enlace a video:    https://www.youtube.com/watch?v=tA40GGmzrKY
    Finalidad ejercicio:  Conectarnos a la BBDD con PDO
    Alumno: Juan María Castillo Giménez
*/
?>
<?php
//require("config.php");
class Conexion{
    protected $conexion_db;

    //Constructor por defecto para esta clase llamada conexion con PDO
    public function __construct()    {

        try {
            $this->conexion_db = new PDO('mysql:host=localhost; dbname=dwes', "root", "");
            $this->conexion_db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
            $this->conexion_db->exec("SET CHARACTER SET utf8");
            return $this->conexion_db;
        } catch (Exception $e) {
            echo $e->getLine();
        }
    }

    //Constructo con MYSQLI
    /*public function __construct()    {

        try {
            $this->conexion_db=new mysqli(DB_HOST, DB_USUARIO, DB_CONTRA, DB_NOMBRE );
            if ($this->conexion_db->connect_errno) {
                echo "Fallo al conectar a MySql: " . $this->conexion_db -> connect_error;
                return;
            }
            $this->conexion_db->set_charset(DB_CHARSET); 
        } catch (Exception $e) {
            echo $e->getLine();
        }
    } */
}
?>