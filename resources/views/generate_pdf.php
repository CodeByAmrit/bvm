<?php
require('resources/fpdf/fpdf.php');

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = $_POST['name'];
    $email = $_POST['email'];
    $phone = $_POST['phone'];
    $address = $_POST['address'];
    $course = $_POST['course'];

    // Create instance of FPDF class
    $pdf = new FPDF();
    $pdf->AddPage();
    $pdf->SetFont('Arial', 'B', 16);
    
    // Add image to PDF
    $pdf->Image('images/form.png', 5, 5, 200);

    // Add content to PDF
    $pdf->Cell(0, 10, ' ', 0, 1, 'C');
    $pdf->SetFont('Arial', '', 12);
    $pdf->Ln(10);
    $pdf->Cell(40, 10, 'Name: ' . $name);
    $pdf->Ln(10);
    $pdf->Cell(40, 10, 'Email: ' . $email);
    $pdf->Ln(10);
    $pdf->Cell(40, 10, 'Phone: ' . $phone);
    $pdf->Ln(10);
    $pdf->Cell(40, 10, 'Address: ' . $address);
    $pdf->Ln(10);
    $pdf->Cell(40, 10, 'Course: ' . $course);

    // Force download the PDF
    $pdf->Output('I', 'student_registration.pdf');
    exit; // Ensure no further output
}
?>
