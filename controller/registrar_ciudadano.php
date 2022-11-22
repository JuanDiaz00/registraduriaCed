<?php
require("../modelo/conection.php");

function addCitizen($nombres, $apellidos, $identificacion, $fx_nacimiento, $lugar_nacimiento, $lugar_exp, $estatura, $rh, $gs) {
$db = Conexion::getConnection();
$query = "INSERT INTO ciudadanos (nombres, apellidos, identificacion, fx_nacimiento, lugar_nacimiento, lugar_exp, estatura, rh, gs)
VALUES
('$nombres', '$apellidos', '$identificacion', '$fx_nacimiento', '$lugar_nacimiento', '$lugar_exp', '$estatura', '$rh', '$gs')";

$db -> query($query);
} if (isset($_POST['New_citizen'])) {
    addCitizen($_POST["nombres"], $_POST["apellidos"], $_POST["identificacion"], $_POST["fx_nacimiento"], $_POST["lugar_nacimiento"], $_POST["lugar_exp"], $_POST["estatura"], $_POST["rh"], $_POST["gs"]);
    header("Location: ../views/paginas/admin/registrar_ciudadano.php?status=success");
}
?>