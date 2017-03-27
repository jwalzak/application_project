<?php
require_once('fpdf/fpdf.php');
require_once('Character.php');

class PDF extends FPDF
{
// Page header
function Header()
{
    // Logo
    $this->Image('images/logo.png',10,6,30);

    // Arial bold 15
    $this->SetFont('Arial','B',15);

    // Move to the right
    $this->Cell(80);

    // Title
    //30 is width, 10 is height, then text, then border t/f (0 or 1)
    $this->Cell(30,10,'Hero Burger: Made to Order',0,0,'C');

    // Line break
    $this->Ln(35);
}

// Page footer
function Footer()
{
    // Position at 1.5 cm from bottom
    $this->SetY(-15);

    // Arial italic 8
    $this->SetFont('Arial','I',8);

    // Page number
    $this->Cell(0,10,'Character Name | Page '.$this->PageNo().'/{nb}',0,0,'C');
}
}

// Instantiation of inherited class
$pdf = new PDF();
$pdf->AliasNbPages();
$pdf->AddPage();
$pdf->SetFont('Times','',12);

$pdf->Cell(0,10,'Name: ', 0, 1);
$pdf->Cell(0,10,'Gender: ', 0, 1);
$pdf->Cell(0,10,'Age: ', 0, 1);
$pdf->Cell(0,10,'Height/Weight: ', 0, 1);

$pdf->Cell(0,10,'________________', 0, 1);

$pdf->Cell(0,10,'Race: ', 0, 1);
$pdf->Cell(0,10,'Class: ', 0, 1);
$pdf->Cell(0,10,'Skills: ', 0, 1);
$pdf->Cell(0,10,'Spells: ', 0, 1);

$pdf->Cell(0,10,'________________', 0, 1);

$pdf->Cell(0,10,'Strength: ', 0, 1);
$pdf->Cell(0,10,'Dexterity: ', 0, 1);
$pdf->Cell(0,10,'Constitution: ', 0, 1);
$pdf->Cell(0,10,'Wisdom: ', 0, 1);
$pdf->Cell(0,10,'Intelligence: ', 0, 1);
$pdf->Cell(0,10,'Charisma: ', 0, 1);

$pdf->Cell(0,10,'________________', 0, 1);

$pdf->Cell(0,10,'Alignment: ', 0, 1);
$pdf->Cell(0,10,'Known Languages: ', 0, 1);
$pdf->Cell(0,10,'Weapon Proficiencies: ', 0, 1);
$pdf->Cell(0,10,'Armor Proficiencies: ', 0, 1);

$pdf->Cell(0,10,'________________', 0, 1);

$pdf->Cell(0,10,'Backstory: ', 0, 1);

//output
$pdf->Output();
?>