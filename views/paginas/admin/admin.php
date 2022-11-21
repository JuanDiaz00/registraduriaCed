

<?php
#Acá voy a hacer lo de generar reporte, no tocar.
// include class
require('fpdf/fpdf.php');

// create document
$pdf = new FPDF();
$pdf->AddPage();

// add text
$pdf->SetFont('Arial', '', 12);
$pdf->Cell(0, 10, 'Generar archivos PDF con PHP', 0, 1);

// output file
$pdf->Output('', 'reporte.pdf');
?>