<?php

require ('../Model/dbConnect.php');
require('../Model/database_functions.php');

include('../fpdf181_PDFgen/fpdf.php');

$pdf = new FPDF();
$pdf->AddPage();
$pdf->SetFont('Arial','B',16);
$pdf->Cell(40,10,'Hello World!');
$pdf->Output();






