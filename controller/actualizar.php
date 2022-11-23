<?php

require("../modelo/conection.php");

function updateOneCiudadano($id, $nombres, $apellidos, $identificacion, $fx_nacimiento, $lugar_nacimiento, $lugar_exp, $estatura, $gs, $rh) {
    $db = Conexion::getConnection();
    $queryCiudadano = "UPDATE ciudadanos SET nombres = '$nombres', apellidos = '$apellidos', identificacion = '$identificacion', fx_nacimiento = '$fx_nacimiento', lugar_nacimiento = '$lugar_nacimiento', lugar_exp = '$lugar_exp', estatura = '$estatura', gs = '$gs', rh = '$rh' WHERE id = " . $id;
    $db -> query($queryCiudadano);
}
if (isset($_POST['actualizaCiudadano'])) {
    updateOneCiudadano($_POST["id"],$_POST["nombres"], $_POST["apellidos"], $_POST["identificacion"], $_POST["fx_nacimiento"], $_POST["lugar_nacimiento"], $_POST["lugar_exp"], $_POST["estatura"], $_POST["rh"], $_POST["gs"] );
    header("Location: ../views/paginas/user/mostrar_ciudadanos.php?status=success");;
}
?>