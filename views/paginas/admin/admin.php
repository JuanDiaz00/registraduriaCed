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
?>

<html>

</html>

<?php
#Acá voy a hacer lo de generar reporte, no tocar.
// include class
require('fpdf/fpdf.php');

// create document
$pdf = new FPDF();
$pdf->AddPage();

// add text
$pdf->SetFont('Arial', '', 12);
$pdf->Cell(0, 10, 'Reporte de Usuarios', 0, 1);

$result = getAllCiudadanos();

while ($row = mysqli_fetch_assoc($result)) {

} #Acá se hace el for para ingresar todos los usuarios

// output file
$pdf->Output('', 'reporte.pdf');
?>