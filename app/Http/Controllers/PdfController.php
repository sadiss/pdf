<?php

namespace App\Http\Controllers;

use Elibyy\TCPDF\Facades\TCPDF;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\App;
use Barryvdh\DomPDF\Facade\Pdf;
// use pdf;

//Reference the Dompdf namespace
use Dompdf\Dompdf;

//Reference the option  namespace
use Dompdf\Options;
use Illuminate\Support\Facades\Storage;


class PdfController extends Controller
{
    public function index()
    {


    }

    public function generatepdf(Request $request)
    {

        try {



            $data = $this->prepareData($request);
            $dompdf = new Dompdf();

            $pdf = Pdf::loadView('pdfSample', ['data' => $data])->setPaper('A4', '');
            $pdf->output();

            $canvas = $pdf->getDomPDF()->getCanvas();
            $height = $canvas->get_height();
            $width = $canvas->get_width();

            $rid = $data['dataset']['reportid'];
            $GLOBALS['id'] = $rid;
            $GLOBALS['p_text'] = $data['f_page'];

            $canvas->page_script(
                '$pdf->set_opacity(1, "Multiply");
                $current_page = $PAGE_NUM;
                $total_pages = $PAGE_COUNT;
                $page =  $GLOBALS["p_text"];
                $r_no = $GLOBALS["id"];
                $font = $fontMetrics->getFont("Helvetica", "normal");
                $pdf->text(450, 820, "Report no. $r_no, $page $current_page / $total_pages", $font, 10, [0,191,191],0,0);
            ');
//        $pdf->image(public_path("assets/logo.jpeg"), 0,150, 600, 600);
//        return $pdf->stream('report.pdf');
            $pdf->save(storage_path("/app/public/pdf/$rid.pdf"));
            $st = asset("storage/pdf/$rid.pdf");

            return response()->json([
                'status' => 'Pdf Generated',
                'file' => $st,
            ], 200);
        } catch (\Exception $e){
            return response()->json([
                'status' => $e->getMessage(),
            ], 422);
        }
    }

    public function prepareData($data)
    {


        $prep_data= [];

        $prep_data['lang'] = $data->language;
        $prep_data['skin'] = $data->template_skin;

        $translation = $data->translations;
         for($i = 0; $i<count($translation); $i++)
        {
            if($translation[$i]['text_language'] ==  $data->language)
            {
                $prep_data[$translation[$i]['text_code']] = $translation[$i]['text_translation'];
            }
        }

        $prep_data ['dataset'] = $data->dataset;

        return  $prep_data;

    }


}
