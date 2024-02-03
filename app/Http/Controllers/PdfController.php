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
    public function index()
    {
        

    }

    public function generatepdf(Request $request)
    {
        $file = '{
            "client_id": "47",
            "template_name": "trademark_checkup_report",
            "password": "123456789",
            "language": "EN",
            "template_skin": {
              "primary_color": "#00BFBF",
              "secondary_color": "#FFFFFF",
              "logo_url": "https://trademark.ninoxdb.com/share/gf57zwm5oo3pd76e6j029kuvvx00l7c5pgjh",
              "background_url": "https://trademark.ninoxdb.com/share/gf57zwm5oo3pd76e6j029kuvvx00l7c5pgjh",
              "footer_text": "Trademark Partners",
              "header_text": ""
            },
            "translations": [
              {
                "text_code": "h_report_title",
                "text_translation": "Trademark search report no.",
                "text_language": "EN"
              },
              {
                "text_code": "h_report_title",
                "text_translation": "Badanie zdolności rejestracyjnej znaku towarowego - raport nr",
                "text_language": "PL"
              },
              {
                "text_code": "h_date",
                "text_translation": "Date",
                "text_language": "EN"
              },
              {
                "text_code": "h_date",
                "text_translation": "Data",
                "text_language": "PL"
              },
              {
                "text_code": "h_applicant",
                "text_translation": "Applicant",
                "text_language": "EN"
              },
              {
                "text_code": "h_applicant",
                "text_translation": "Zgłaszający",
                "text_language": "PL"
              },
              {
                "text_code": "h_subjectivemark",
                "text_translation": "Subjective Mark",
                "text_language": "EN"
              },
              {
                "text_code": "h_subjectivemark",
                "text_translation": "Analizowany znak",
                "text_language": "PL"
              },
              {
                "text_code": "h_classes",
                "text_translation": "Classes",
                "text_language": "EN"
              },
              {
                "text_code": "h_classes",
                "text_translation": "Klasy",
                "text_language": "PL"
              },
              {
                "text_code": "h_territory",
                "text_translation": "Territory",
                "text_language": "EN"
              },
              {
                "text_code": "h_territory",
                "text_translation": "Terytorium",
                "text_language": "PL"
              },
              {
                "text_code": "rh_summary",
                "text_translation": "SUMMARY",
                "text_language": "EN"
              },
              {
                "text_code": "rh_summary",
                "text_translation": "PODSUMOWANIE",
                "text_language": "PL"
              },
              {
                "text_code": "dth_class",
                "text_translation": "Class",
                "text_language": "EN"
              },
              {
                "text_code": "dth_class",
                "text_translation": "Klasa",
                "text_language": "PL"
              },
              {
                "text_code": "dth_identical",
                "text_translation": "Identical mark(s) detected?",
                "text_language": "EN"
              },
              {
                "text_code": "dth_identical",
                "text_translation": "Czy zgłoszono identyczny znak?",
                "text_language": "PL"
              },
              {
                "text_code": "dth_similar",
                "text_translation": "Similar mark(s) detected?",
                "text_language": "EN"
              },
              {
                "text_code": "dth_similar",
                "text_translation": "Czy zgłoszono podobny znak?",
                "text_language": "PL"
              },
              {
                "text_code": "dth_illustration",
                "text_translation": "Illustration of registration chances*",
                "text_language": "EN"
              },
              {
                "text_code": "dth_illustration",
                "text_translation": "Ilustracja szans na rejestrację*",
                "text_language": "PL"
              },
              {
                "text_code": "dth_remarks",
                "text_translation": "Remarks",
                "text_language": "EN"
              },
              {
                "text_code": "dth_remarks",
                "text_translation": "Uwagi",
                "text_language": "PL"
              },
              {
                "text_code": "rh_details",
                "text_translation": "DETAILS",
                "text_language": "EN"
              },
              {
                "text_code": "rh_details",
                "text_translation": "SZCZEGÓŁY",
                "text_language": "PL"
              },
              {
                "text_code": "sth_territory",
                "text_translation": "Territory",
                "text_language": "EN"
              },
              {
                "text_code": "sth_territory",
                "text_translation": "Terytorium",
                "text_language": "PL"
              },
              {
                "text_code": "sth_mark",
                "text_translation": "Mark",
                "text_language": "EN"
              },
              {
                "text_code": "sth_mark",
                "text_translation": "Znak",
                "text_language": "PL"
              },
              {
                "text_code": "sth_register",
                "text_translation": "Register",
                "text_language": "EN"
              },
              {
                "text_code": "sth_register",
                "text_translation": "Numer rejestru",
                "text_language": "PL"
              },
              {
                "text_code": "sth_class",
                "text_translation": "Class",
                "text_language": "EN"
              },
              {
                "text_code": "sth_class",
                "text_translation": "Klasa",
                "text_language": "PL"
              },
              {
                "text_code": "sth_status",
                "text_translation": "Status",
                "text_language": "EN"
              },
              {
                "text_code": "sth_status",
                "text_translation": "Status",
                "text_language": "PL"
              },
              {
                "text_code": "sth_markowner",
                "text_translation": "Mark Owner",
                "text_language": "EN"
              },
              {
                "text_code": "sth_markowner",
                "text_translation": "Właściciel znaku",
                "text_language": "PL"
              },
              {
                "text_code": "sth_individual",
                "text_translation": "Is mark owner individual person?",
                "text_language": "EN"
              },
              {
                "text_code": "sth_individual",
                "text_translation": "Czy znak zgłoszono na osobę fizyczną?",
                "text_language": "PL"
              },
              {
                "text_code": "sth_filingdate",
                "text_translation": "Filing date",
                "text_language": "EN"
              },
              {
                "text_code": "sth_filingdate",
                "text_translation": "Data zgłoszenia",
                "text_language": "PL"
              },
              {
                "text_code": "sth_regstartdate",
                "text_translation": "Registration start date",
                "text_language": "EN"
              },
              {
                "text_code": "sth_regstartdate",
                "text_translation": "Początek okresu ochronnego",
                "text_language": "PL"
              },
              {
                "text_code": "sth_regenddate",
                "text_translation": "Registration end date",
                "text_language": "EN"
              },
              {
                "text_code": "sth_regenddate",
                "text_translation": "Koniec okresu ochronnego",
                "text_language": "PL"
              },
              {
                "text_code": "sth_evaluation",
                "text_translation": "Evaluation",
                "text_language": "EN"
              },
              {
                "text_code": "sth_evaluation",
                "text_translation": "Ocena podobieństwa",
                "text_language": "PL"
              },
              {
                "text_code": "sth_remarks",
                "text_translation": "Remarks",
                "text_language": "EN"
              },
              {
                "text_code": "sth_remarks",
                "text_translation": "Uwagi",
                "text_language": "PL"
              },
              {
                "text_code": "sth_image",
                "text_translation": "Image",
                "text_language": "EN"
              },
              {
                "text_code": "sth_image",
                "text_translation": "Widok rejestru",
                "text_language": "PL"
              },
              {
                "text_code": "lastpage_additional_header",
                "text_translation": "Additional information or recommendations",
                "text_language": "EN"
              },
              {
                "text_code": "lastpage_additional_header",
                "text_translation": "Uwagi i rekomendacje",
                "text_language": "PL"
              },
              {
                "text_code": "lastpage_disclaimer_header",
                "text_translation": "Disclaimer",
                "text_language": "EN"
              },
              {
                "text_code": "lastpage_disclaimer_header",
                "text_translation": "Zastrzeżenia",
                "text_language": "PL"
              },
              {
                "text_code": "f_report_no",
                "text_translation": "Report no.",
                "text_language": "EN"
              },
              {
                "text_code": "f_report_no",
                "text_translation": "Raport nr",
                "text_language": "PL"
              },
              {
                "text_code": "f_page",
                "text_translation": "Page",
                "text_language": "EN"
              },
              {
                "text_code": "f_page",
                "text_translation": "Strona",
                "text_language": "PL"
              }
            ],
            "dataset": {
              "reportid": "401076",
              "date": "19/12/2023",
              "applicant": "Agnieszka Bielewicz",
              "subjectivemark": "BLA BLA",
              "classes": "10",
              "territory": "China",
              "summarytable": [
                {
                  "class": "10",
                  "identical": true,
                  "similarnumber": 3,
                  "similar": null,
                  "illustration": 3,
                  "remarks": "Medium risk of refusal. Filing depends on risk & budget tolerance."
                }
              ],
              "summurytablefootertext": "* the assessment of chances for registration applies to registration in the first attempt without any pre-filing actions such as: non-use cancellation or invalidation of an existing, potentially conflicting mark(s). Assessment is done under foreseen circumstances. Applicant is to accept that final success depends on many factors and is sole decision of trademark office on given territory. ",
              "show_nosamemarktext": false,
              "nosamemarktext": "No same or similar mark to BLA BLA was detected in class: 10 in territory of China.",
              "detailstables": [
                {
                  "territory": "China",
                  "mark": "GLA BLA",
                  "register": "35654433",
                  "class": "10",
                  "statusnumber": 3,
                  "status": "issued and active",
                  "markowner": "都可以上海公司",
                  "individual": "No",
                  "filingdate": "07/12/2023",
                  "regstartdate": "12/12/2023",
                  "regenddate": "20/12/2023",
                  "evaluationnumber": 1,
                  "evaluation": "Identical",
                  "remarks": "The company doesn\'t exist anymore. ",
                  "imageurl": "https://trademark.ninoxdb.com/share/g79ss4o5fh1tgck1zqzpmxl1fkzyt5r3t734"
                },
                {
                  "territory": "China",
                  "mark": "BLA BLA",
                  "register": "98736627",
                  "class": "10",
                  "statusnumber": 4,
                  "status": "cancellation / invalidation pending",
                  "markowner": "GREAT COMPANY",
                  "individual": "No",
                  "filingdate": "15/11/2023",
                  "regstartdate": "27/11/2023",
                  "regenddate": "06/12/2023",
                  "evaluationnumber": 1,
                  "evaluation": "Identical",
                  "remarks": "There is a place to place a remarks",
                  "imageurl": "https://trademark.ninoxdb.com/share/481ec8605b3yvqq79mngn2wjo7bwf5fuhvll"
                }
              ],
              "additionalinfo": "Raport dotyczy wyłącznie terytorium wskazanego na początku dokumentu.\nRaport należy analizować wg. daty kiedy został sporządzony, co oznacza, że sytuacja w bazie znaków i wynikające z niej wnioski w kontekście przedmiotowego znaku mogą się zmienić wraz z napływem nowych wniosków do urzędu patentowego na przestrzeni czasu.",
              "disclaimer": "1. Raport dotyczy wyłącznie terytorium wskazanego na początku dokumentu.\n2. Raport należy analizować wg. daty kiedy został sporządzony, co oznacza, że sytuacja w bazie znaków i wynikające z niej wnioski w kontekście przedmiotowego znaku mogą się zmienić wraz z napływem nowych wniosków do urzędu patentowego na przestrzeni czasu.\n3. Raport zawiera ocenę zdolności rejestracyjnej przedmiotowego znaku w danej klasie i nie dotyczy szacowania obecności potencjalnych znaków przeciwstawnych z innych klas. \n4. Niniejsza analiza została zrobiona w oparciu o ogólnodostępne bazy danych na danym terytorium.\n5.Opracowanie dotyczy transkrypcji słownej znaku. Jeśli zgłaszano by znak słowno-graficzny, niezależnie od niniejszej oceny, szanse na uzyskanie rejestracji zależą od oceny możliwości udzielenia ochrony znaku bazując na całej jego kompozycji. Oznacza to, że finalna decyzja urzędu patentowego może pozostawać rozbieżna od oceny szans na uzyskanie rejestracji analizowanego znaku, wynikającej z rekomendacji w niniejszej analizie. \n6.Ocena podobieństwa znaków i rekomendację przygotowano w najlepszej wierze w oparciu o doświadczenie analityka na danym terytorium, co oznacza, że jest ona subiektywna. Może ona się różnić od oceny czytającego ten raport. Finalna decyzja urzędu w kwestii udzielenia przedmiotowego znaku w danej klasie może być rozbieżna od oceny szans na uzyskanie rejestracji analizowanego znaku, wynikającej z rekomendacji w niniejszej analizie. Może wynikać również z subiektywnej oceny znaku przez przedstawiciela urzędu lub orzecznictwo danego urzędu, którego analiza nie jest objęta niniejszym opracowaniem.\n7.Analizując raport należy mieć świadomość niemożliwego do oceny ryzyka istnienia wcześniejszych zgłoszeń do ochrony identycznych lub bardzo podobnych znaków towarowych nieujawnionych w bazie w momencie sporządzania niniejszego raportu, co zmieniłoby wynik analizy zdolności rejestracyjnej oraz rekomendacje. \n8.Niniejsza analiza zdolności odróżniającej jest poglądowa a rekomendacje mają charakter jedynie poglądowy. Z uwagi wspomniane przesłanki, sporządzający nie ponosi odpowiedzialności za jakiekolwiek skutki, bezpośrednie lub pośrednie, przypadkowe lub wynikające z zastosowania zalecenia do złożenia znaku towarowego do celu ochrony.\n9.Niniejsze opracowanie nie jest poradą prawną czy rekomendacją biznesową nie należy do tak traktować"
            }
          }';

        $data = $this->prepareData(json_decode($file));

        $dompdf = new Dompdf();
        
        $pdf = Pdf::loadView('pdfSample', ['data'=> $data])->setPaper('A4', '');
        $pdf->output();

        $canvas = $pdf->getDomPDF()->getCanvas();
        $height = $canvas->get_height();
        $width = $canvas->get_width();
        return $pdf->stream('report.pdf');
        // return;
    }

    public function prepareData($data) 
    {
        $prep_data= [];

        $prep_data ['lang'] = $data->language;
        $prep_data ['skin'] = $data->template_skin;
       
        $translation = $data->translations;
        
        for($i = 0; $i<count($translation); $i++)
        {
            if($translation[$i]->text_language ==  $data->language)
            {
                $prep_data[$translation[$i]->text_code] = $translation[$i]->text_translation;
            }
        }

        $prep_data ['dataset'] = $data->dataset;

        return  $prep_data;





    }

    
}
