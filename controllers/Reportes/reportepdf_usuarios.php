<?php
session_start();
require('libreria/fpdf.php'); //Ruta de acceso a la clase fpdf.php

$respuesta = $_SESSION["respuesta"];

class PDF extends FPDF
{
    function Header()
    {
        $this->SetFont('Arial', 'B', 14);
        $this->Cell(0, 10, 'Reporte de Usuarios', 0, 1, 'C');
        $this->Ln(5);

        $this->SetFont('Arial', 'B', 10);
        $this->Cell(20, 10, 'Codigo', 1);
        $this->Cell(40, 10, 'Nombre', 1);
        $this->Cell(50, 10, 'Correo', 1);
        $this->Cell(25, 10, 'Clave', 1);
        $this->Ln();
    }

    function Footer()
    {
        $this->SetY(-15);
        $this->SetFont('Arial', 'I', 8);
        $this->Cell(0, 10, 'Pagina ' . $this->PageNo(), 0, 0, 'C');
    }
}

$pdf = new PDF();
$pdf->AddPage();
$pdf->SetFont('Arial', '', 10);

foreach ($respuesta as $fila) {
    $pdf->Cell(20, 8, $fila[0], 1);
    $pdf->Cell(40, 8, utf8_decode($fila[1]), 1);
    $pdf->Cell(50, 8, utf8_decode($fila[2]), 1);
    $pdf->Cell(25, 8, utf8_decode($fila[3]), 1);
    $pdf->Ln();
}

$pdf->Output('D', 'reporte_usuarios.pdf');
?>
