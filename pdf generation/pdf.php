<?php
if(!empty($_POST['submit']))
{
    $roll = $_POST['rollno'];
    $f_name = $_POST['Name'];
    $l_name = $_POST['cvv'];
    $email = $_POST['email'];

    require("fpdf/fpdf.php");

    $pdf = new FPDF();
    $pdf->Addpage();

    $pdf->SetFont("Arial","B",16);
    $pdf->Cell(0,10,"Registration Details",1,1,'C');

    $pdf->Cell(45,10,"Product Name",1,0);
    $pdf->Cell(60,10,"Card Holder Name",1,0);
    $pdf->Cell(45,10,"Cvv",1,0);
    $pdf->Cell(0,10,"Email Id",1,1);

    $pdf->Cell(45,10,$roll,1,0);
    $pdf->Cell(45,10,$f_name,1,0);
    $pdf->Cell(45,10,$l_name,1,0);
    $pdf->Cell(0,10,$email,1,0);
    
    $file = time().'.pdf';
    $pdf->output($file,'D');
}
?>