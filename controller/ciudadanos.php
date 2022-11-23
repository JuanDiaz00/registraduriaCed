<?php

if (!defined('LIBRARIES_PATH')) {
    define('LIBRARIES_PATH', '../modelo/');
}

if (!defined('VIEWS_PATH')) {
    define('VIEWS_PATH', '../Views/');
}

require_once(LIBRARIES_PATH . "conection.php");

function getAllCiudadanos() {
    $db = Conexion::getConnection();
    $queryCiudadano = "SELECT * FROM ciudadanos";
    $result = $db -> query($queryCiudadano);
    return $result;
}

function getOneCiudadano($id) {
    $db = Conexion::getConnection();
    $queryCiudadano = "SELECT * FROM ciudadanos WHERE id = " . $id;
    $result = $db -> query($queryCiudadano);

    if ($result -> num_rows > 0) {
        return $result;
    }
    return null;
}

function updateOneCiudadano($id, $nombres, $apellidos, $identificacion, $fx_nacimiento, $lugar_nacimiento, $lugar_exp, $estatura, $gs, $rh) {
    $db = Conexion::getConnection();
    $queryCiudadano = "UPDATE ciudadanos SET nombres = '$nombres', apellidos = '$apellidos', identificacion = '$identificacion', fx_nacimiento = '$fx_nacimiento', lugar_nacimiento = '$lugar_nacimiento', lugar_exp = '$lugar_exp', estatura = '$estatura', gs = '$gs', rh = '$rh' WHERE id = " . $id;
    $db -> query($queryCiudadano);
}


function newCiudadano($nombres, $apellidos, $identificacion, $fx_nacimiento, $lugar_nacimiento, $lugar_exp, $estatura, $gs, $rh) {
    $db = Conexion::getConnection();
    $queryCiudadano = "INSERT INTO ciudadano (nombres, apellidos, identificacion, fx_nacimiento, lugar_nacimiento, lugar_exp, estatura, gs, rh) VALUES ('$nombres', '$apellidos', '$identificacion', '$fx_nacimiento', '$lugar_nacimiento', '$lugar_exp', '$estatura', '$gs', '$rh')";
    $db -> query($queryCiudadano);
}
if (isset($_POST['nuevo_ciudadano'])) {
    newCiudadano($_POST["nombres"], $_POST["apellidos"], $_POST["identificacion"], $_POST["fx_nacimiento"], $_POST["lugar_nacimiento"], $_POST["lugar_exp"], $_POST["estatura"], $_POST["gs"], $_POST["rh"]);
    header("Location:".VIEWS_PATH."paginas/admin/registrar_ciudadano.php");
}