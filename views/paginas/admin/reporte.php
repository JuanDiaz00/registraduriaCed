<?php
#Paths
define('LIBRARIES_PATH', '../../../modelo/');
define('CONTROLLER_PATH', '../../../controller/');
define('VIEWS_PATH', '../../../views/');
define('CSS_PATH', '../../estilos/');
define('JS_PATH', '../../scripts/');

if (!defined('CONFIG_PATH')) {
    define('CONFIG_PATH', '../../../config/');
}

require_once(CONTROLLER_PATH . "ciudadanos.php");

#Acá voy a hacer lo de generar reporte, no tocar.
// include class
require('fpdf/fpdf.php');

// create document
$pdf = new FPDF();
$pdf->AddPage();

// add text
$pdf->SetFont('Arial', 'B', 12);
$pdf->Cell(0, 10, 'Reporte de Usuarios', 0, 1);

$result = getAllCiudadanos();

$miCabecera = array('Id', 'Nombres', 'Apellidos', 'Fecha Nacimiento', 'Lugar Nacimiento');
$misDatos = array();

$pdf->SetFont('Arial', '', 12);

$pdf->SetFillColor(232,232,232);

$pdf->SetFont('Arial','B',10);
$pdf->Cell(36,6, utf8_decode('Identificación'),1,0,'C',1);
$pdf->Cell(36,6,'Nombres',1,0,'C',1);
$pdf->Cell(36,6,'Apellidos',1,0,'C',1);
$pdf->Cell(36,6,'Fecha Nacimiento',1,0,'C',1);
$pdf->Cell(36,6,'Lugar Nacimiento',1,0,'C',1);
$pdf->Ln(10);

while ($row = mysqli_fetch_assoc($result)) {
$id = utf8_decode($row['identificacion']);
$nombres = utf8_decode($row['nombres']);
$apellidos = utf8_decode($row['apellidos']);
$fx_nacimiento = utf8_decode($row['fx_nacimiento']);
$lugar_nacimiento = utf8_decode($row['lugar_nacimiento']);

$pdf->Cell(36,15,$id,1,0,'L',0);
$pdf->Cell(36,15,$nombres,1,0,'L',0);
$pdf->Cell(36,15,$apellidos,1,0,'L',0);
$pdf->Cell(36,15,$fx_nacimiento,1,0,'L',0);
$pdf->Cell(36,15,$lugar_nacimiento,1,0,'L',0);
$pdf->Ln(15);
} #Acá se hace el for para ingresar todos los usuarios

// output file
$pdf->Output('', 'reporte.pdf');
?>