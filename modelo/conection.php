<?php
if (!defined('CONFIG_PATH')) {
    define('CONFIG_PATH', '../config/');
}

require_once(CONFIG_PATH . "config.php");

class Conexion
{
    public static function getConnection()
    {
       
        $conector = new mysqli("localhost", "root", "", "registraduria");
        if (mysqli_connect_errno()) {
            //echo $conector->connect_error;
        }
        return $conector;
    }
}
//print_r(Conexion::getConnection());
?>