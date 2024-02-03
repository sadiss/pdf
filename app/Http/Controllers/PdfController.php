<?php

namespace App\Http\Controllers;

use Elibyy\TCPDF\Facades\TCPDF;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\App;
use Barryvdh\DomPDF\Facade\Pdf;
// use PDF;

//Reference the Dompdf namespace
use Dompdf\Dompdf;

//Reference the option  namespace
use Dompdf\Options;


class PdfController extends Controller
{

    public function generatepdf()
    {

//         return view('pdfSample');
        $dompdf = new Dompdf();
//        $dompdf->loadHtml($html);
//        $dompdf->render();

        $pdf = Pdf::loadView('pdfSample', [] ,[] ,'UTF-8')->setPaper('A4', '');
        $pdf->render();
        $canvas = $pdf->getDomPDF()->getCanvas();
         $canvas->page_script(
            '$pdf->set_opacity(1, "Multiply");
            $current_page = $PAGE_NUM;
            $total_pages = $PAGE_COUNT;
            $font = $fontMetrics->getFont("Helvetica", "normal");
            $pdf->text(450, 820, "Report no. 889475, page $current_page / $total_pages", $font, 10, [0,191,191],0,0);

            ');
//        $pdf->image(public_path("assets/logo.jpeg"), 0,150, 600, 600);
        return $pdf->stream('report.pdf');
    }
}
