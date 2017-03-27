<?php
define('APP_DIR', __DIR__);
require_once __DIR__ . '/vendor/autoload.php';
require_once __DIR__ . '/bootstrap.php';

/**
 * @var Silex\Application $app defined in bootstrap.php
 */

$app['smarty']->assign('showLogin', false);

$app->get('/', function () use ($app)
{
    $products = $app['db']->fetchAll('SELECT productID, name , description, price,in_stock, thumbnail FROM products WHERE enabled=1;');

    $app['smarty']->assign('products', $products);
    return $app['smarty']->fetch('main.tpl');
});

$app->get('/employees', function () use ($app)
{
    $txtFileName = "overzichtWerknemers.txt";
    $pdfFileName = "overzichtWerknemers.pdf";
    $fs = fopen($txtFileName, 'w');
    $queryResult = $app['db']->fetchAll('SELECT * FROM werknemers');

    // header line
    fputs($fs, str_pad("Voornaam", 25, " ") . str_pad("Achternaam", 25, " ") . str_pad("Kamer", 15, " ") . str_pad("Toestel", 15, " ") . "\n");
    fputs($fs, str_pad("", 80, "=") . "\n");
    foreach ($queryResult as $row)
    {
        $result  = str_pad($row['voornaam'], 25, " ");
        $result .= str_pad($row['achternaam'], 25, " ");
        $result .= str_pad($row['kamer'], 25, " ");
        $result .= str_pad($row['toestel'], 25, " ") . "\n";
        fputs($fs, $result);
    }

    fclose($fs);

    // create PDF output from textfile
    include 'fpdf.lib.php';
    $pdf = new PDF();
    $pdf->Open();
    $pdf->SetTitle('Overzicht werknemers  kamers en toestellen');
    $pdf->SetAuthor('Carmen');
    $pdf->AddPage();
    $pdf->ChapterBody($txtFileName);
    $pdf->Output($pdfFileName);

    unlink($txtFileName);
    return $app->sendFile($pdfFileName);
});

$app->get('/orders', function () use ($app)
{
    $txtFileName = "overzichtBestellingen.txt";
    $pdfFileName = "overzichtBestellingen.pdf";
    $fs = fopen($txtFileName, 'w');
    $queryResult = $app['db']->fetchAll('SELECT voornaam, achternaam, postcode, telefoon, email, orderid, productid1, productaantal1  FROM orderregels');

    // header line
    fputs($fs, str_pad("Voornaam", 25, " ") . str_pad("Achternaam", 25, " ") . str_pad("Postcode", 10, " ") . str_pad("Telefoon", 10, " ") . str_pad("Email", 20, " ") . str_pad("orderid", 10, " ") . str_pad("productid1", 11, " ") . str_pad("productaantal1", 15, " ") . "\n");
    fputs($fs, str_pad("", 120, "=") . "\n");
    foreach ($queryResult as $row)
    {
        $result  = str_pad($row['voornaam'], 25, " ");
        $result .= str_pad($row['achternaam'], 25, " ");
        $result .= str_pad($row['postcode'], 10, " ");
        $result .= str_pad($row['telefoon'], 10, " ");
        $result .= str_pad($row['email'], 20, " ");
        $result .= str_pad($row['orderid'], 10, " ");
        $result .= str_pad($row['productid1'], 11, " ");
        $result .= str_pad($row['productaantal1'], 15, " ")
            . "\n";
        fputs($fs, $result);
    }

    fclose($fs);

    // create PDF output from textfile
    include 'fpdf.lib.php';
    $pdf = new PDF('l');
    $pdf->Open();
    $pdf->SetTitle('Overzicht werknemers  kamers en toestellen');
    $pdf->SetAuthor('Carmen');
    $pdf->AddPage();
    $pdf->ChapterBody($txtFileName);
    $pdf->Output($pdfFileName);

    unlink($txtFileName);
    return $app->sendFile($pdfFileName);
});

$app->run();