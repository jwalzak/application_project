<?php
session_start();
require_once('fpdf/fpdf.php');
require_once('connect.php');

//SQL filth
//pulls specified character, not linked to session variable yet
$sqlPull = "SELECT charId, name, age, gender, height, weight, race, class FROM tblchar WHERE charId = '7' ";
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
        $pdfSkills  = $row["skills"];
        $pdfSpells  = $row["spells"];
        $pdfStatStr = $row["str"];
        $pdfStatDex = $row-["dex"];
        $pdfStatCon = $row["con"];
        $pdfStatWis = $row["wis"];
        $pdfStatInt = $row["intel"];
        $pdfStatCha = $row["cha"];
        //echo "success";
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
            // Arial bold 15
            $this->SetFont('Arial','B',32);

            // Move to the right
            $this->Cell(80);

            // Title
            //30 is width, 10 is height, then text, then border t/f (0 or 1)
            $this->Cell(58,15,'Hero Burger: Made to Order',0,0,'C');

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
            $this->Cell(0,10,'Page ' . $this->PageNo().'/{nb}',0,0,'C');
        }
}

// Instantiation of inherited class
$pdf = new PDF();
$pdf->AliasNbPages();
$pdf->AddPage();

// Logo
$pdf->Image('images/logo.png',8,10,30);

//set inner border box
$pdf->Rect(2, 2, 206, 293, 'D');

//Add name under header title becuase A~E~S~T~H~E~T~I~C
$pdf->SetFont('Helvetica','',26);
$pdf->Cell(212,-22,$pdfName,0,0,'C');

//set font
$pdf->SetFont('Times','',12);

//set page margins and add border
$pageWidth = 210;
$pageHeight = 297;

$pdf->Cell(0,10,'Name: ' . $pdfName, 0, 1);
$pdf->Cell(0,10,'Gender: ' . $pdfGender, 0, 1);
$pdf->Cell(0,10,'Age: ' . $pdfAge, 0, 1);
$pdf->Cell(0,10,'Height/Weight: ' . $pdfHeight . "/" . $pdfWeight, 0, 1);
$pdf->Rect(4, 55, 202, 30, 'D');

$pdf->Cell(0,2,'', 0, 1);

$pdf->Cell(0,10,'Race: ' . $pdfRace, 0, 1);
$pdf->Cell(0,10,'Class: ' . $pdfClass, 0, 1);
$pdf->Cell(0,10,'Skills: ' . $pdfSkills, 0, 1);
$pdf->Cell(0,10,'Spells: ' . $pdfSpells, 0, 1);
$pdf->Rect(4, 87, 202, 40, 'D');

$pdf->Cell(0,2,'', 0, 1);

$pdf->Cell(0,10,'Strength: ' . $pdfStatStr, 0, 1);
$pdf->Cell(0,10,'Dexterity: ' . $pdfStatDex, 0, 1);
$pdf->Cell(0,10,'Constitution: ' . $pdfStatCon, 0, 1);
$pdf->Cell(0,10,'Wisdom: ' . $pdfStatWis, 0, 1);
$pdf->Cell(0,10,'Intelligence: ' . $pdfStatInt, 0, 1);
$pdf->Cell(0,10,'Charisma: ' . $pdfStatCha, 0, 1);
$pdf->Rect(4, 129, 202, 60, 'D');

$pdf->Cell(0,2,'', 0, 1);

$pdf->Cell(0,10,'Alignment: ', 0, 1);
$pdf->Cell(0,10,'Known Languages: ' . $pdfLang, 0, 1);
$pdf->Cell(0,10,'Weapon Proficiencies: ', 0, 1);
$pdf->Cell(0,10,'Armor Proficiencies: ', 0, 1);
$pdf->Rect(4, 191, 202, 40, 'D');

$pdf->Cell(0,2,'', 0, 1);

$pdf->Cell(0,10,'Backstory: ', 0, 1);
$pdf->Rect(4, 233, 202, 45, 'D');

//output
$pdf->Output();
?>