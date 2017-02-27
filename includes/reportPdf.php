<?php

// define('FPDF_FONTPATH','../font/');
include('fpdf.lib.php');
include('functions.php');
include('dbConnect.php');

//include('../includes/functions.php');

//include('../includes/dbConnect.php');
//
//   
$filename = "overzichtWerknemers.txt";
$fs = fopen( $filename, 'w');
$queryResult = overzichtWerknemers();
//var_dump($queryResult);




// header line
fputs($fs, str_pad( "Voornaam",25, " ") . str_pad( "Achternaam",25, " ") . str_pad( "Kamer",15, " ") . str_pad( "Toestel",15, " ") . "\n"  );
fputs($fs, str_pad( "",80, "=") . "\n" );
    foreach($queryResult as $row){

        $result = str_pad( $row[0],25, " ");
        $result .= str_pad( $row[1],25, " ");
        $result .= str_pad( $row[2],25, " ");
        $result .= str_pad( $row[3],25, " ") . "\n";
        fputs($fs, $result);
    }

fclose ( $fs) ;



// create PDF output from textfile
$pdf=new PDF();

$pdf->Open();
$title='Overzicht werknemers  kamers en toestellen';
$pdf->SetTitle($title);
$pdf->SetAuthor('Carmen');
// tekst Chapter bevalt niet
// $pdf->PrintChapter('','Werknemers-Kamers-Toestellen', $filename );
$pdf->AddPage();
$pdf->ChapterBody( $filename );
$pdf->Output();



$filename = "overzichtBestellingen.txt";
$fs = fopen( $filename, 'w');
$queryResult = overzichtBestellingen();

foreach($queryResult as $row){

    $result = str_pad( $row[0],25, " ");
    $result .= str_pad( $row[1],25, " ");
    $result .= str_pad( $row[2],25, " ");
    $result .= str_pad( $row[3],25, " ") . "\n";
    fputs($fs, $result);
}

fclose ( $fs) ;


// PHPNET perl instal nodig
// 
/*
$p = PDF_new();

/*  open new PDF file; insert a file name to create the PDF on disk */
/*
if (PDF_begin_document($p, "", "") == 0) {
    die("Error: " . PDF_get_errmsg($p));
}

PDF_set_info($p, "Creator", "hello.php");
PDF_set_info($p, "Author", "Rainer Schaaf");
PDF_set_info($p, "Title", "Hello world (PHP)!");

PDF_begin_page_ext($p, 595, 842, "");

$font = PDF_load_font($p, "Helvetica-Bold", "winansi", "");

PDF_setfont($p, $font, 24.0);
PDF_set_text_pos($p, 50, 700);
PDF_show($p, "Hello world!");
PDF_continue_text($p, "(says PHP)");
PDF_end_page_ext($p, "");

PDF_end_document($p, "");

$buf = PDF_get_buffer($p);
$len = strlen($buf);

header("Content-type: application/pdf");
header("Content-Length: $len");
header("Content-Disposition: inline; filename=hello.pdf");
print $buf;

PDF_delete($p);
*/ 
?>
