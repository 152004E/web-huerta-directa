<?php
require('libreria/fpdf.php'); //Ruta de acceso a la clase fpdf.php, clase externa

include "../../models/usuarios.php";
$usuario = new usuarios();
$respuesta = $usuario->ConsultaGeneral();
//Se asigna a $datos todos los datos a exportar

class PDF extends FPDF
{
    // Cabecera
    function Header()   //Se define el encabezado de la tabla
    {
        $this->SetFont('Arial', 'B', 14);   //Fuente
        $this->Cell(0, 10, 'Reporte de Usuarios', 0, 1, 'C');   //Ubicación de la celda
        $this->Ln(5);   //Se asigna al documento la línea

        $this->SetFont('Arial', 'B', 10);   //Fuente
        $this->Cell(20, 10, 'Codigo', 1);   //Se define el alto, ancho y contenido de la celda
        $this->Cell(40, 10, 'Nombre', 1);
        $this->Cell(50, 10, 'Correo', 1);
        $this->Cell(25, 10, 'Contraseña', 1);
        $this->Ln();    //Se asigna al documento la línea
    }

    // Pie de página
    function Footer()
    {
        $this->SetY(-15);   //Antes de finalizar la página
        $this->SetFont('Arial', 'I', 8);    //Fuente
        $this->Cell(0, 10, 'Pagina ' . $this->PageNo(), 0, 0, 'C'); //Número de la página
    }
}

$pdf = new PDF();   //Se define el objeto $pdf
$pdf->AddPage();    //Se le adiciona una página
$pdf->SetFont('Arial', '', 10);     //Fuente

foreach($respuesta as $fila){    //El ciclo llena la tabla desde la tercera línea
    $pdf->Cell(20, 8, $fila[0], 1);     //Se asigna en la siguiente línea el dato
    $pdf->Cell(30, 8, $fila[1], 1);
    $nombre = utf8_decode($fila[2]);    //Permite que integre caracteres especiales
    $pdf->Cell(40, 8, $nombre, 1);
    $pdf->Cell(30, 8, $fila[3], 1);
    $pdf->Cell(50, 8, $fila[4], 1);
    $pdf->Cell(25, 8, $fila[5], 1);
    $pdf->Ln();
}

$pdf->Output('D', 'reporte_usuarios.pdf'); // 'D' = descarga directa con nombre reporte_usuarios.pdf

?>