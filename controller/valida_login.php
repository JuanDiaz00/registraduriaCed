<?php

define('CONTROLLER_PATH', '../Controllers/');
define('VIEWS_PATH', '../views/paginas/');
define('LIBRARIES_PATH', '../modelo/');




require_once(LIBRARIES_PATH."conection.php");
$db = Conexion::getConnection();   
$query = "SELECT * FROM usuarios WHERE correo='".$_POST["correo"]."' and clave='".$_POST["clave"]."'";
$result = $db->query($query);
if ($result->num_rows > 0) {
    //echo "Datos Correctos";
    while ($row = mysqli_fetch_assoc($result)) {
        if ($row["rol"] == 1) { //Usuario con menos privilegios
            header("Location:".VIEWS_PATH."user/mostrar_ciudadanos.php");
        }
        if ($row["rol"] == 0) { //Administrador
            header("Location:".VIEWS_PATH."admin/admin.php");
        }
    }
    //header("Location:".VIEWS_PATH."home_user.php");
} else {  
    //echo "Datos Incorrectos";
    header("Location:".VIEWS_PATH."index.php?info=1");
}
?>