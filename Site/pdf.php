<?php
require_once('fpdf/fpdf.php');
require_once('connect.php');

//SQL filth
$sqlPull = "SELECT charId, name, age, gender, height, weight, race, class FROM tblchar";
$result = $conn->query($sqlPull);

if ($result->num_rows > 0) {
     // output data of each row
     while($row = $result->fetch_assoc()) {
         $pdfCharId = $row["charId"];
         $pdfName = $row["name"];
         $pdfAge = $row["age"];
         $pdfGender = $row["gender"];
         $pdfHeight = $row["height"];
         $pdfWeight = $row["weight"];
         $pdfRace = $row["race"];
         $pdfClass = $row["class"];
         //echo "sucsecs";
     }
} else {
     echo "newp";
}
//end of filth

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
    $this->Cell(0,10,'Page ' . $this->PageNo().'/{nb}'.$pdfName,0,0,'C');
}
}

// Instantiation of inherited class
$pdf = new PDF();
$pdf->AliasNbPages();
$pdf->AddPage();
$pdf->SetFont('Times','',12);

$pdf->Cell(0,10,'Name: ' . $pdfName, 0, 1);
$pdf->Cell(0,10,'Gender: ' . $pdfGender, 0, 1);
$pdf->Cell(0,10,'Age: ' . $pdfAge, 0, 1);
$pdf->Cell(0,10,'Height/Weight: ' . $pdfHeight . "/" . $pdfWeight, 0, 1);

$pdf->Line(20, 45, 210-20, 45); // 20mm from each edge

$pdf->Cell(0,10,'Race: ' . $pdfRace, 0, 1);
$pdf->Cell(0,10,'Class: ' . $pdfClass, 0, 1);
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