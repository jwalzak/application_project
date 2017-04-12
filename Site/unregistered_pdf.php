<?php
session_start();
require('fpdf/fpdf.php');
require('connect.php');

$char = $_SESSION['newChar'];

// output data of each row
    $pdfName    = $char->name;
    $pdfAge     = $char->age;
    $pdfGender  = $char->gender;
    $pdfHeight  = $char->height;
    $pdfWeight  = $char->weight;
    $pdfLang    = $char->languages;
    $pdfRace    = $char->race;
    $pdfClass   = $char->class;
    $pdfSkills  = $char->skills;
    $pdfSpells  = $char->spells;
    $pdfStatStr = $char->str;
    $pdfStatDex = $char->dex;
    $pdfStatCon = $char->con;
    $pdfStatWis = $char->wis;
    $pdfStatInt = $char->int;
    $pdfStatCha = $char->cha;
    $pdfAlign = $char->alignment;
    $pdfStory = $char->backstory;
    //echo "success";

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
$pdf->Cell(212,-22,"Unregistered Hero: " . $pdfName,0,0,'C');

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

$pdf->Cell(0,10,'Alignment: ' . $pdfAlign, 0, 1);
$pdf->Cell(0,10,'Known Languages: ' . $pdfLang, 0, 1);
$pdf->Cell(0,10,'Weapon Proficiencies: ', 0, 1);
$pdf->Cell(0,10,'Armor Proficiencies: ', 0, 1);
$pdf->Rect(4, 191, 202, 40, 'D');

$pdf->Cell(0,2,'', 0, 1);

$pdf->Cell(0,10,'Backstory: ' . $pdfStory, 0, 1);
$pdf->Rect(4, 233, 202, 45, 'D');

//output
$pdf->Output();
?>