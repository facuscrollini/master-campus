<?php 
require('../libraries/fpdf/fpdf.php');
include_once("../config/bd.php");
$bdConection = BaseData::crearInstancia();


function agregarTexto($pdf, $text, $x, $y, $align='L', $font, $size=10, $r=0, $g=0, $b=0){
    $pdf->SetFont($font, "", $size);
    $pdf->SetXY($x, $y);
    $pdf->SetTextColor($r,$g,$b);
    $pdf->Cell(0,10, $text, 0,0, $align);
    // $pdf->Text($x, $y, $text);
}

function agregarImagen($pdf, $image, $x, $y){
    $pdf->Image($image, $x, $y,0);
}



$student_id = isset($_GET["student_id"]) ?  $_GET["student_id"] : "";
$program_id = isset($_GET["program_id"]) ?  $_GET["program_id"] : "";


$sql = 'SELECT students.name, students.last_name, programs.program_name as program_name FROM students, programs WHERE programs.id =:program_id AND students.id=:student_id';

$request = $bdConection->prepare($sql);
$request->bindParam(':program_id', $program_id);
$request->bindParam(':student_id', $student_id);
$request->execute();
$student = $request->fetch(PDO::FETCH_ASSOC);

$full_name = ucwords(mb_convert_encoding($student["name"]." ".$student["last_name"], "ISO-8859-1", "UTF-8"));
$program = $student["program_name"];

$pdf = new FPDF("L", "mm", array(254,194));
$pdf->AddPage();
$pdf->SetFont("Arial", "B", 16);
agregarImagen($pdf, "../src/certificado.jpg", 0,0);
agregarTexto($pdf, $full_name, 80,75, "L", "Helvetica", 20, 0,84,115);
agregarTexto($pdf, $program, 95,105, "L", "Helvetica", 30, 0,84,115);
agregarTexto($pdf, date("d/m/Y"), 65, 145, "L", "Helvetica", 15, 0,84,115);
$pdf->Output();

print_r($student["name"] . " " . $student["last_name"]);
print_r($student["program_name"])

?>