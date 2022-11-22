<?php
define('CONFIG_PATH', '../config/');


require_once(CONFIG_PATH . "config.php");

class Conexion
{
    public static function getConnection()
    {
       
        $conector = new mysqli(HOST, USER, PASSWORD, DB);
        if (mysqli_connect_errno()) {
            echo "Error conectandose a la base de datos.";
        }
        return $conector;
    }
}
