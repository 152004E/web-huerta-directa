<?php
require('libreria/fpdf.php');
include "../../models/productos.php";
$producto = new productos();

$campo = '';
$valor = '';

if (!empty($_GET['buscar'])) {
    $campo = 'name_product';
    $valor = $_GET['buscar'];
} elseif (!empty($_GET['categoria']) && $_GET['categoria'] != "Por categoría") {
    $campo = 'category';
    $valor = $_GET['categoria'];
}

if ($campo && $valor) {
    $respuesta = $producto->ConsultaEspecifica($campo, $valor);
} else {
    $respuesta = $producto->ObtenerTodos();
}

class PDF extends FPDF {
    function Header() {
        $this->SetFont('Arial', 'B', 14);
        $this->Cell(0, 10, 'Reporte de productos', 0, 1, 'C');
        $this->Ln(5);

        $this->SetFont('Arial', 'B', 10);
        $this->Cell(40, 10, 'Nombre', 1);
        $this->Cell(40, 10, 'Categoria', 1);
        $this->Cell(30, 10, 'Precio', 1);
        $this->Cell(30, 10, 'Unidad', 1);
        $this->Cell(50, 10, 'Descripcion', 1);
        $this->Ln();
    }

    function Footer() {
        $this->SetY(-15);
        $this->SetFont('Arial', 'I', 8);
        $this->Cell(0, 10, 'Pagina ' . $this->PageNo(), 0, 0, 'C');
    }
}

$pdf = new PDF();
$pdf->AddPage();
$pdf->SetFont('Arial', '', 10);

foreach ($respuesta as $fila) {
    $pdf->Cell(40, 8, utf8_decode($fila["name_product"]), 1);
    $pdf->Cell(40, 8, utf8_decode($fila["category"]), 1);
    $pdf->Cell(30, 8, number_format($fila["price"]), 1);
    $pdf->Cell(30, 8, utf8_decode($fila["unidad"]), 1);
    $descripcion = substr($fila["description_product"], 0, 30); // por si es muy larga
    $pdf->Cell(50, 8, utf8_decode($descripcion), 1);
    $pdf->Ln();
}

$pdf->Output('D', 'reporte_roductos.pdf');