<?php
include "vendor/autoload.php";


use Fpdf\Fpdf;

class PDF extends Fpdf
{
    // Page header
    function Header()
    {

        // Arial bold 15
        $this->SetFont('Arial', 'B', 15);
        // Move to the right
        $this->Cell(80);
        // Title
        $this->Cell(45, 10, 'MY QUOTES', 0, 0, 'C');
        // Line break
        $this->Ln(20);
    }

    // Page footer
    function Footer()
    {
        // Position at 1.5 cm from bottom
        $this->SetY(-15);
        // Arial italic 8
        $this->SetFont('Arial','I',8);
        // Page number
        $this->Cell(0,10,'Page ' . $this->PageNo() . '/{nb}', 0, 0, 'C');
    }
}

// Instanciation of inherited class
$pdf = new PDF();
$pdf->AliasNbPages();
$pdf->AddPage();
$pdf->AddFont("Carmilla");
$pdf->SetFont('Carmilla', '', 35);
$pdf->Cell(0,10,'DREAM CHASER MONEY MAKER ',0,1);
$pdf->SetFont('Arial', '', 12);
$pdf->Cell(0,10,'TIME IS GOLD ',0,1);
$pdf->SetFont('Times', '', 12);
$pdf->Cell(0,10,'The greatest glory in living lies not in never falling, but in rising every time we fall ',0,1);
$pdf->SetFont('Arial', '', 12);
$pdf->Cell(0,10,' When you have a dream, youve got to grab it and never let go',0,1);
$pdf->Output();