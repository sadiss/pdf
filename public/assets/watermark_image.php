<?php
//Include Autoloader
require_once 'dompdf/autoloader.inc.php';

//Reference the Dompdf namespace 
use Dompdf\Dompdf;

//Reference the option  namespace 
use Dompdf\Options;

//Set options to enable embedder PHP
$options = new Options();
$options->set('isPhpEnabled', 'true');


//instantiate dompdf class
$dompdf = new Dompdf($options);

//load content from html file 

$html = file_get_contents("pdfsamlpe");
$dompdf->loadHtml($html);


$dompdf->setPaper('A4', 'portrait');

$dompdf->render();

$canvas = $dompdf->getCanvas();

$w = $canvas->get_width();
$h = $canvas->get_height();

$imageUrl = 'https://trademark.ninoxdb.com/share/gf57zwm5oo3pd76e6j029kuvvx00l7c5pgjh';
$imgWidth = 156;
$imgHeight = 156; 

$canvas->set_opacity(.3);

$x = (($w-$imgWidth)-10);
$y = (($h-$imgHeight)-20);

$canvas->image($imageUrl, $x, $y, $imgWidth, $imgHeight);

$dompdf->stream('document-img.pdf', array('Attachment' => 1));

?>