<?php
require("../modelo/conection.php");

$db = Conexion::getConnection();
$query = "SELECT * FROM usuarios WHERE correo = '".$_POST["correo"]."' AND clave = '".$_POST["clave"]."'";
$result = $db -> query($query);

if($result -> num_rows > 0) {
    while ($row = mysqli_fetch_assoc($result)) {
        if ($row["rol"] == 0) {
            echo "Hola usuario";
        } else if ($row["rol"] == 1) {
            echo "Hola admin";
        }
    }
} else {
    echo "no funciono";
}