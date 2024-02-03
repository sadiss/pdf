<!DOCTYPE html>
<html lang="en">

<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="https://myserver.com/pdf.php">
{{--    <link rel="stylesheet" href="{{asset('assets/app.css')}}">--}}
{{--    <link rel="stylesheet" href="{{asset('assets/bootstrap.min.css')}}">--}}

    <link rel="stylesheet" href="{{public_path('assets/bootstrap.min.css') }}">
    <link rel="stylesheet" href="{{public_path('assets/app.css')}}">
{{--    --}}

    <style>
        @font-face {
            font-family: 'Firefly Sung';
            font-style: normal;
            font-weight: 400;
            src: url({{public_path('assets/fireflysung.ttf')}}) format('truetype');
        }

        .chienese {
            font-family: Firefly Sung, DejaVu Sans, Verdana, Arial, sans-serif;
        }
        @page {
            margin: 200px 1px 1px !important;
        }

        header {
            position: fixed;
            margin-top:-170px;
            width: 100%;
        }

        footer {
            position: fixed;
            bottom: 0;
            height: 20px;
            background-color: rgb(235,235,235);
            right: 0;
            text-align: center;
            padding: 10px 20px;
            color: rgb(11,201,201);
            width: 170px;
        }
    </style>
{{--    <style>--}}
{{--        <?php include(public_path('assets/bootstrap.min.css'));?>--}}
{{--    </style>--}}
    <title>Generate PDF</title>
</head>

<body>
<header>
    <div class="strip" style="background-color: {{$data['skin']->primary_color}}">
        <div class="container">
            <div class="row">
                <div class="col-6 logo">
                    <img src="{{$data['skin']->logo_url}}" alt="logo">
                </div>
                <div class="col-6 h_report_title">{{$data['h_report_title']}} {{$data['dataset']->reportid}}</div>
            </div>
        </div>
    </div>
</header>

<footer>

</footer>
<main>
    <div class="container">
        <div class="row info">
            <div class="col-12">
                <p class="meta-date">Date: {{$data['dataset']->date}}</p>
                <p class="meta-applicant">Applicant: {{$data['dataset']->applicant}}</p>
                <p class="meta-mark">Subjective mark: {{$data['dataset']->subjectivemark}}</p>
                <p class="meta-classes">Classes: {{$data['dataset']->classes}}</p>
                <p class="meta-teritory">Teritory: {{$data['dataset']->territory}}</p>
            </div>
        </div>

        <div class="row">
            <div class="col-12 summary-title">{{$data['rh_summary']}}</div>
        </div>

        <table class="custom-table">
            <thead class="header">
            <tr>
                <td scope="col" style="width: 5%">Class</td>
                <td scope="col" style="width: 15%">Identical mark(s) detected?</td>
                <td scope="col" style="width: 15%">Similar mark(s) detected?</td>
                <td scope="col" style="width: 15%">Illustration of registration chances*</td>
                <td scope="col" style="width: 50%">Remarks</td>
            </tr>
            </thead>
            <tbody class="tbody">

            @foreach($data['dataset']->summarytable as $row)
            <tr >
                <td scope="row">{{$row->class}}</td>
                <td style="background:<?php echo ($row->identical)? 'red': '#D4FB79'?>"><?php echo ($row->identical)? 'YES': 'NO'?></td>
                <td style="background-color: @if($row->similarnumber == 1) #FFD479 @elseif ($row->similarnumber == 2) #D4FB79 @else #ffffff @endif">
                   @if($row->similarnumber == 1) YES @elseif ($row->similarnumber == 2) NO @else N/A @endif
                </td>
                <td><img src="{{public_path('assets/'.$row->illustration.'.png')}}" alt="" style="width: 80px;"></td>
                <td style="text-align: left; padding-left: 10px;">{{$row->remarks}}</td>
            </tr>

            @endforeach
            
           
            <tr>
                <td scope='row' colspan="5" style="text-align: left; border-bottom: 1px black;">
                    {{$data['dataset']->summurytablefootertext}}

                </td>
            </tr>
            </tbody>
        </table>

        <div class="row">
            <div class="col-12 details-title">{{$data['rh_details']}}</div>
        </div>
        @foreach ($data['dataset']-> detailstables as $row)


        <div class="row">
            <div class="col-12 details-title">Class-{{$row->class}}</div>
        </div>

        <table class="custom-table1">
            <tbody>
            <tr>
                <td scope="col" class="col1 bggray">Teritory</td>
                <td scope="col" colspan="2" class="col2 bgwhite">{{$row->territory}}</td>
                <td scope="col" class="col1 bggray">Image</td>
            </tr>
            <tr>
                <td scope="col" class="col1 h23 bggray">Mark</td>
                <td scope="col" colspan="2" class="col2 h23 bgwhite">{{$row->mark}}</td>
                <!-- <td scope="col" class="col3 "></td> -->
                <td scope="col" rowspan="10" class="col3 bg-image" style="
        background: url('https://trademark.ninoxdb.com/share/g79ss4o5fh1tgck1zqzpmxl1fkzyt5r3t734');">
                </td>
            </tr>
            <tr>
                <td scope="col" class="col1 h23 bggray">Register</td>
                <td scope="col" colspan="2" class="col2  h23 bgwhite">{{$row->register}}</td>
            </tr>
            <tr>
                <td scope="col" class="col1 bggray">Class</td>
                <td scope="col" colspan="2" class="col2 h23 bgwhite">{{$row->class}}</td>
            </tr>
            <tr>
                <td scope="col" class="col1 h23 bggray">Status</td>
                <td scope="col" colspan="2" class="col2 h23 bgwhite">{{$row->status}}</td>
            </tr>
            <tr>
                <td scope="col" class="col1 h23 bggray">Mark owner</td>
                <td scope="col" colspan="2" class="col2 h23  bgwhite chienese">{{$row->markowner}}</td>
            </tr>
            <tr>
                <td scope="col" class="col1 bggray">Is mark owner individual person?</td>
                <td scope="col" colspan="2" class="col2 h23 bgwhite">{{$row->individual}}</td>
            </tr>
            <tr>
                <td scope="col" rowspan="3" class="col1  bgwhite bg-icon" style="background: url('{{public_path('assets/Issued and active.png')}}');"></td>
                <td scope="col" class="col2 row1 bggray">Filing date</td>
                <td scope="col" class="col2 row1 bgwhite">{{$row->filingdate}}</td>
            </tr>
            <tr>
                <td scope="col" class="col2 row1 bggray">Registration start date</td>
                <td scope="col" class="col2 row1 bgwhite">{{$row->regstartdate}}</td>
            </tr>
            <tr>
                <td scope="col" class="col2 row1 bggray">Registration end date</td>
                <td scope="col" class="col2 row1 bgwhite">{{$row->regenddate}}</td>
            </tr>
            <tr>
                <td scope="col" class="col1 row1 bggray">Evaluation</td>
                <td scope="col" colspan="2" style="background-color: red; text-align: center; color: white;" class="col2">IDENTICAL</td>
            </tr>
            <td scope="col" class="col1 row1 bggray">Remarks</td>
            <td scope="col" colspan="3" style="width: 80% bgwhite"></td>
            </tr>
            </tbody>
        </table>

        @endforeach


        <div class="page-break"></div>

        <div class="row">
            <div class="col-12 class-7">Class-8</div>
        </div>

        <table id="table2" class="custom-table1">
            <tbody>
            <tr>
                <td scope="col" class="col1 bggray">Teritory</td>
                <td scope="col" colspan="2" class="col2 bgwhite">China</td>
                <td scope="col" class="col1 bggray">Image</td>
            </tr>
            <tr>
                <td scope="col" class="col1 h23 bggray">Mark</td>
                <td scope="col" colspan="2" class="col2 h23 bgwhite">NUTO</td>
                <!-- <td scope="col" class="col3 "></td> -->
                <td scope="col" rowspan="10" class="col3 bg-image" style="
        background: url('https://trademark.ninoxdb.com/share/g79ss4o5fh1tgck1zqzpmxl1fkzyt5r3t734');">
                </td>
            </tr>
            <tr>
                <td scope="col" class="col1 h23 bggray">Register</td>
                <td scope="col" colspan="2" class="col2  h23 bgwhite">7748945</td>
            </tr>
            <tr>
                <td scope="col" class="col1 bggray">Class</td>
                <td scope="col" colspan="2" class="col2 h23 bgwhite">8</td>
            </tr>
            <tr>
                <td scope="col" class="col1 h23 bggray">Status</td>
                <td scope="col" colspan="2" class="col2 h23 bgwhite">examination</td>
            </tr>
            <tr>
                <td scope="col" class="col1 h23 bggray">Mark owner</td>
                <td scope="col" colspan="2" class="col2 h23  bgwhite chienese">ABC COMPANY</td>
            </tr>
            <tr>
                <td scope="col" class="col1 bggray">Is mark owner individual person?</td>
                <td scope="col" colspan="2" class="col2 h23 bgwhite">NO</td>
            </tr>
            <tr>
                <td scope="col" rowspan="3" class="col1  bgwhite bg-icon" style="background: url('{{public_path('assets/examination.png')}}');"></td>
                <td scope="col" class="col2 row1 bggray">Filing date</td>
                <td scope="col" class="col2 row1 bgwhite">2023-09-14</td>
            </tr>
            <tr>
                <td scope="col" class="col2 row1 bggray">Registration start date</td>
                <td scope="col" class="col2 row1 bgwhite">n/a</td>
            </tr>
            <tr>
                <td scope="col" class="col2 row1 bggray">Registration end date</td>
                <td scope="col" class="col2 row1 bgwhite">n/a</td>
            </tr>
            <tr>
                <td scope="col" class="col1 row1 bggray">Evaluation</td>
                <td scope="col" colspan="2" style="background-color: orange; text-align: center; color: white;" class="col2">HIGH SIMILARITY, HIGH RISK OF BEING CONSIDERED A CONFLICTING MARK</td>
            </tr>
            <td scope="col" class="col1 row1 bggray">Remarks</td>
            <td scope="col" colspan="3" style="width: 80% bgwhite; padding-left: 3px">Trademark registered for more than 3 years. It is possible to file a request for cancellation for non-use. If the applicant fails to provide satisfactory proof of use, the mark will be cancelled.</td>
            </tr>
            </tbody>
        </table>

        <br>

        <table id="table3" class="custom-table1">
            <tbody>
            <tr>
                <td scope="col" class="col1 bggray">Teritory</td>
                <td scope="col" colspan="2" class="col2 bgwhite">China</td>
                <td scope="col" class="col1 bggray">Image</td>
            </tr>
            <tr>
                <td scope="col" class="col1 h23 bggray">Mark</td>
                <td scope="col" colspan="2" class="col2 h23 bgwhite">NUTOX</td>
                <!-- <td scope="col" class="col3 "></td> -->
                <td scope="col" rowspan="10" class="col3 bg-image" style="
        background: url('https://trademark.ninoxdb.com/share/g79ss4o5fh1tgck1zqzpmxl1fkzyt5r3t734');">
                </td>
            </tr>
            <tr>
                <td scope="col" class="col1 h23 bggray">Register</td>
                <td scope="col" colspan="2" class="col2  h23 bgwhite">3871204</td>
            </tr>
            <tr>
                <td scope="col" class="col1 bggray">Class</td>
                <td scope="col" colspan="2" class="col2 h23 bgwhite">8</td>
            </tr>
            <tr>
                <td scope="col" class="col1 h23 bggray">Status</td>
                <td scope="col" colspan="2" class="col2 h23 bgwhite">publication</td>
            </tr>
            <tr>
                <td scope="col" class="col1 h23 bggray">Mark owner</td>
                <td scope="col" colspan="2" class="col2 h23  bgwhite chienese">EFG COMPANY</td>
            </tr>
            <tr>
                <td scope="col" class="col1 bggray">Is mark owner individual person?</td>
                <td scope="col" colspan="2" class="col2 h23 bgwhite">YES</td>
            </tr>
            <tr>
                <td scope="col" rowspan="3" class="col1  bgwhite bg-icon" style="background: url('{{public_path('assets/publication.png')}}');"></td>
                <td scope="col" class="col2 row1 bggray">Filing date</td>
                <td scope="col" class="col2 row1 bgwhite">2023-09-14</td>
            </tr>
            <tr>
                <td scope="col" class="col2 row1 bggray">Registration start date</td>
                <td scope="col" class="col2 row1 bgwhite">n/a</td>
            </tr>
            <tr>
                <td scope="col" class="col2 row1 bggray">Registration end date</td>
                <td scope="col" class="col2 row1 bgwhite">n/a</td>
            </tr>
            <tr>
                <td scope="col" class="col1 row1 bggray">Evaluation</td>
                <td scope="col" colspan="2" style="background-color: yellow; text-align: center;" class="col2">MODERATE SIMILARITY, COULD BE CONSIDERED AS A CONFLICTING MARK</td>
            </tr>
            <td scope="col" class="col1 row1 bggray">Remarks</td>
            <td scope="col" colspan="3" style="width: 80% bgwhite; padding-left: 3px"></td>
            </tr>
            </tbody>
        </table>

        <div class="page-break"></div>

        <br>

        <table id="table4" class="custom-table1">
            <tbody>
            <tr>
                <td scope="col" class="col1 bggray">Teritory</td>
                <td scope="col" colspan="2" class="col2 bgwhite">China</td>
                <td scope="col" class="col1 bggray">Image</td>
            </tr>
            <tr>
                <td scope="col" class="col1 h23 bggray">Mark</td>
                <td scope="col" colspan="2" class="col2 h23 bgwhite">HUTOX</td>
                <!-- <td scope="col" class="col3 "></td> -->
                <td scope="col" rowspan="10" class="col3 bg-image" style="
        background: url('https://trademark.ninoxdb.com/share/g79ss4o5fh1tgck1zqzpmxl1fkzyt5r3t734');">
                </td>
            </tr>
            <tr>
                <td scope="col" class="col1 h23 bggray">Register</td>
                <td scope="col" colspan="2" class="col2  h23 bgwhite">3674093</td>
            </tr>
            <tr>
                <td scope="col" class="col1 bggray">Class</td>
                <td scope="col" colspan="2" class="col2 h23 bgwhite">8</td>
            </tr>
            <tr>
                <td scope="col" class="col1 h23 bggray">Status</td>
                <td scope="col" colspan="2" class="col2 h23 bgwhite">refused</td>
            </tr>
            <tr>
                <td scope="col" class="col1 h23 bggray">Mark owner</td>
                <td scope="col" colspan="2" class="col2 h23  bgwhite chienese">QWERRTY COMPANY</td>
            </tr>
            <tr>
                <td scope="col" class="col1 bggray">Is mark owner individual person?</td>
                <td scope="col" colspan="2" class="col2 h23 bgwhite">YES</td>
            </tr>
            <tr>
                <td scope="col" rowspan="3" class="col1  bgwhite bg-icon" style="background: url('{{public_path('assets/refused.png')}}');"></td>
                <td scope="col" class="col2 row1 bggray">Filing date</td>
                <td scope="col" class="col2 row1 bgwhite">2023-09-14</td>
            </tr>
            <tr>
                <td scope="col" class="col2 row1 bggray">Registration start date</td>
                <td scope="col" class="col2 row1 bgwhite">n/a</td>
            </tr>
            <tr>
                <td scope="col" class="col2 row1 bggray">Registration end date</td>
                <td scope="col" class="col2 row1 bgwhite">n/a</td>
            </tr>
            <tr>
                <td scope="col" class="col1 row1 bggray">Evaluation</td>
                <td scope="col" colspan="2" style="background-color: yellow; text-align: center;" class="col2">MODERATE SIMILARITY, COULD BE CONSIDERED AS A CONFLICTING MARK</td>
            </tr>
            <td scope="col" class="col1 row1 bggray">Remarks</td>
            <td scope="col" colspan="3" style="width: 80% bgwhite; padding-left: 3px"></td>
            </tr>
            </tbody>
        </table>

        <div class="page-break"></div>

        <br>

        <div class="row">
            <div class="col-12 class-7">Class-9</div>
        </div>

        <br>

        <table id="table5" class="custom-table1">
            <tbody>
            <tr>
                <td scope="col" class="col1 bggray">Teritory</td>
                <td scope="col" colspan="2" class="col2 bgwhite">China</td>
                <td scope="col" class="col1 bggray">Image</td>
            </tr>
            <tr>
                <td scope="col" class="col1 h23 bggray">Mark</td>
                <td scope="col" colspan="2" class="col2 h23 bgwhite">NUTOZ</td>
                <!-- <td scope="col" class="col3 "></td> -->
                <td scope="col" rowspan="10" class="col3 bg-image" style="
        background: url('https://trademark.ninoxdb.com/share/g79ss4o5fh1tgck1zqzpmxl1fkzyt5r3t734');">
                </td>
            </tr>
            <tr>
                <td scope="col" class="col1 h23 bggray">Register</td>
                <td scope="col" colspan="2" class="col2  h23 bgwhite">39894873</td>
            </tr>
            <tr>
                <td scope="col" class="col1 bggray">Class</td>
                <td scope="col" colspan="2" class="col2 h23 bgwhite">9</td>
            </tr>
            <tr>
                <td scope="col" class="col1 h23 bggray">Status</td>
                <td scope="col" colspan="2" class="col2 h23 bgwhite">publication</td>
            </tr>
            <tr>
                <td scope="col" class="col1 h23 bggray">Mark owner</td>
                <td scope="col" colspan="2" class="col2 h23  bgwhite chienese">XYZ COMPANY</td>
            </tr>
            <tr>
                <td scope="col" class="col1 bggray">Is mark owner individual person?</td>
                <td scope="col" colspan="2" class="col2 h23 bgwhite">YES</td>
            </tr>
            <tr>
                <td scope="col" rowspan="3" class="col1  bgwhite bg-icon" style="background: url('{{public_path('assets/publication.png')}}');"></td>
                <td scope="col" class="col2 row1 bggray">Filing date</td>
                <td scope="col" class="col2 row1 bgwhite">2023-09-14</td>
            </tr>
            <tr>
                <td scope="col" class="col2 row1 bggray">Registration start date</td>
                <td scope="col" class="col2 row1 bgwhite">2023-09-14</td>
            </tr>
            <tr>
                <td scope="col" class="col2 row1 bggray">Registration end date</td>
                <td scope="col" class="col2 row1 bgwhite">2023-09-14</td>
            </tr>
            <tr>
                <td scope="col" class="col1 row1 bggray">Evaluation</td>
                <td scope="col" colspan="2" style="background-color: yellow; text-align: center;" class="col2">MODERATE SIMILARITY, COULD BE CONSIDERED AS A CONFLICTING MARK</td>
            </tr>
            <td scope="col" class="col1 row1 bggray">Remarks</td>
            <td scope="col" colspan="3" style="width: 80% bgwhite; padding-left: 3px"></td>
            </tr>
            </tbody>
        </table>

        <br>
        <br>
        <br>
        <div class="row">
            <div class="col-12 class-7">Class-10</div>
        </div>

        <br>

        <table id="table6" class="custom-table1">
            <tbody>
            <tr>
                <td scope="col" class="col1 bggray">Teritory</td>
                <td scope="col" colspan="2" class="col2 bgwhite">China</td>
                <td scope="col" class="col1 bggray">Image</td>
            </tr>
            <tr>
                <td scope="col" class="col1 h23 bggray">Mark</td>
                <td scope="col" colspan="2" class="col2 h23 bgwhite">NHUTOX</td>
                <!-- <td scope="col" class="col3 "></td> -->
                <td scope="col" rowspan="10" class="col3 bg-image" style="
        background: url('https://trademark.ninoxdb.com/share/g79ss4o5fh1tgck1zqzpmxl1fkzyt5r3t734');">
                </td>
            </tr>
            <tr>
                <td scope="col" class="col1 h23 bggray">Register</td>
                <td scope="col" colspan="2" class="col2  h23 bgwhite">39894873</td>
            </tr>
            <tr>
                <td scope="col" class="col1 bggray">Class</td>
                <td scope="col" colspan="2" class="col2 h23 bgwhite">10</td>
            </tr>
            <tr>
                <td scope="col" class="col1 h23 bggray">Status</td>
                <td scope="col" colspan="2" class="col2 h23 bgwhite">publication</td>
            </tr>
            <tr>
                <td scope="col" class="col1 h23 bggray">Mark owner</td>
                <td scope="col" colspan="2" class="col2 h23  bgwhite chienese">XYZ COMPANY</td>
            </tr>
            <tr>
                <td scope="col" class="col1 bggray">Is mark owner individual person?</td>
                <td scope="col" colspan="2" class="col2 h23 bgwhite">YES</td>
            </tr>
            <tr>
                <td scope="col" rowspan="3" class="col1  bgwhite bg-icon" style="background: url('{{public_path('assets/publication.png')}}');"></td>
                <td scope="col" class="col2 row1 bggray">Filing date</td>
                <td scope="col" class="col2 row1 bgwhite">2023-09-14</td>
            </tr>
            <tr>
                <td scope="col" class="col2 row1 bggray">Registration start date</td>
                <td scope="col" class="col2 row1 bgwhite">2023-09-14</td>
            </tr>
            <tr>
                <td scope="col" class="col2 row1 bggray">Registration end date</td>
                <td scope="col" class="col2 row1 bgwhite">2023-09-14</td>
            </tr>
            <tr>
                <td scope="col" class="col1 row1 bggray">Evaluation</td>
                <td scope="col" colspan="2" style="background-color: #d4fb79; text-align: center;" class="col2">SLIGHT SIMILARITY</td>
            </tr>
            <td scope="col" class="col1 row1 bggray">Remarks</td>
            <td scope="col" colspan="3" style="width: 80% bgwhite; padding-left: 3px"></td>
            </tr>
            </tbody>
        </table>

        <div class="page-break"></div>

        <br>

        <table id="table7" class="custom-table1">
            <tbody>
            <tr>
                <td scope="col" class="col1 bggray">Teritory</td>
                <td scope="col" colspan="2" class="col2 bgwhite">China</td>
                <td scope="col" class="col1 bggray">Image</td>
            </tr>
            <tr>
                <td scope="col" class="col1 h23 bggray">Mark</td>
                <td scope="col" colspan="2" class="col2 h23 bgwhite">NHUTOA</td>
                <!-- <td scope="col" class="col3 "></td> -->
                <td scope="col" rowspan="10" class="col3 bg-image" style="
        background: url('https://trademark.ninoxdb.com/share/g79ss4o5fh1tgck1zqzpmxl1fkzyt5r3t734');">
                </td>
            </tr>
            <tr>
                <td scope="col" class="col1 h23 bggray">Register</td>
                <td scope="col" colspan="2" class="col2  h23 bgwhite">93674927</td>
            </tr>
            <tr>
                <td scope="col" class="col1 bggray">Class</td>
                <td scope="col" colspan="2" class="col2 h23 bgwhite">10</td>
            </tr>
            <tr>
                <td scope="col" class="col1 h23 bggray">Status</td>
                <td scope="col" colspan="2" class="col2 h23 bgwhite">pending invalidation or cancellation</td>
            </tr>
            <tr>
                <td scope="col" class="col1 h23 bggray">Mark owner</td>
                <td scope="col" colspan="2" class="col2 h23  bgwhite chienese">XYZ COMPANY</td>
            </tr>
            <tr>
                <td scope="col" class="col1 bggray">Is mark owner individual person?</td>
                <td scope="col" colspan="2" class="col2 h23 bgwhite">YES</td>
            </tr>
            <tr>
                <td scope="col" rowspan="3" class="col1  bgwhite bg-icon" style="background: url('{{public_path('assets/pending invalidation or cancellation.png')}}');"></td>
                <td scope="col" class="col2 row1 bggray">Filing date</td>
                <td scope="col" class="col2 row1 bgwhite">2023-09-14</td>
            </tr>
            <tr>
                <td scope="col" class="col2 row1 bggray">Registration start date</td>
                <td scope="col" class="col2 row1 bgwhite">2023-09-14</td>
            </tr>
            <tr>
                <td scope="col" class="col2 row1 bggray">Registration end date</td>
                <td scope="col" class="col2 row1 bgwhite">2023-09-14</td>
            </tr>
            <tr>
                <td scope="col" class="col1 row1 bggray">Evaluation</td>
                <td scope="col" colspan="2" style="background-color: #d4fb79; text-align: center;" class="col2">SLIGHT SIMILARITY</td>
            </tr>
            <td scope="col" class="col1 row1 bggray">Remarks</td>
            <td scope="col" colspan="3" style="width: 80% bgwhite; padding-left: 3px"></td>
            </tr>
            </tbody>
        </table>

        <br>
        <br>

        <table id="table8" class="custom-table1">
            <tbody>
            <tr>
                <td scope="col" class="col1 bggray">Teritory</td>
                <td scope="col" colspan="2" class="col2 bgwhite">China</td>
                <td scope="col" class="col1 bggray">Image</td>
            </tr>
            <tr>
                <td scope="col" class="col1 h23 bggray">Mark</td>
                <td scope="col" colspan="2" class="col2 h23 bgwhite">NHUTOC</td>
                <!-- <td scope="col" class="col3 "></td> -->
                <td scope="col" rowspan="10" class="col3 bg-image" style="
        background: url('https://trademark.ninoxdb.com/share/g79ss4o5fh1tgck1zqzpmxl1fkzyt5r3t734');">
                </td>
            </tr>
            <tr>
                <td scope="col" class="col1 h23 bggray">Register</td>
                <td scope="col" colspan="2" class="col2  h23 bgwhite">38748329</td>
            </tr>
            <tr>
                <td scope="col" class="col1 bggray">Class</td>
                <td scope="col" colspan="2" class="col2 h23 bgwhite">10</td>
            </tr>
            <tr>
                <td scope="col" class="col1 h23 bggray">Status</td>
                <td scope="col" colspan="2" class="col2 h23 bgwhite">❌ expired, invalidated or cancelled</td>
            </tr>
            <tr>
                <td scope="col" class="col1 h23 bggray">Mark owner</td>
                <td scope="col" colspan="2" class="col2 h23  bgwhite chienese">XYZ COMPANY</td>
            </tr>
            <tr>
                <td scope="col" class="col1 bggray">Is mark owner individual person?</td>
                <td scope="col" colspan="2" class="col2 h23 bgwhite">YES</td>
            </tr>
            <tr>
                <td scope="col" rowspan="3" class="col1  bgwhite bg-icon" style="background: url('{{public_path('assets/expired, invalidated or cancelled.png')}}');"></td>
                <td scope="col" class="col2 row1 bggray">Filing date</td>
                <td scope="col" class="col2 row1 bgwhite">2023-09-14</td>
            </tr>
            <tr>
                <td scope="col" class="col2 row1 bggray">Registration start date</td>
                <td scope="col" class="col2 row1 bgwhite">2023-09-14</td>
            </tr>
            <tr>
                <td scope="col" class="col2 row1 bggray">Registration end date</td>
                <td scope="col" class="col2 row1 bgwhite">2023-09-14</td>
            </tr>
            <tr>
                <td scope="col" class="col1 row1 bggray">Evaluation</td>
                <td scope="col" colspan="2" style="background-color: #d4fb79; text-align: center;" class="col2">SLIGHT SIMILARITY</td>
            </tr>
            <td scope="col" class="col1 row1 bggray">Remarks</td>
            <td scope="col" colspan="3" style="width: 80% bgwhite; padding-left: 3px"></td>
            </tr>
            </tbody>
        </table>


        <div class="page-break"></div>

        <br>
        <div class="row">
            <div class="col-12 class-7">Class-11</div>
        </div>
        <br>

        <div class="row, details-title" style="text-align: left;">
            No same of similar mark to [xMark] was detected in class: [xClass] in territory of [xTerritory].
        </div>

        <br>

        <div class="row, details-title">
            Additional information or recommendations
        </div>

        <br>

        <div class="row, details-title" style="text-align: left;">
            Bla bla bla bla bla bla bla
        </div>

        <br>

        <div class="row, details-title">
            Disclaimer
        </div>

        <br>

        <div class="row, details-title" style="text-align: left;">
            Bla bla bla bla bla bla bla
        </div>

        <div class="page-break"></div>

        <table id="table9" class="custom-table9" >
            <thead ">
            <tr>
                <td scope="col" colspan="2" style="border: 0; text-align: center;">*****</td>
            </tr>
            <tr>
                <td scope="col" style="width: 20px; border: 0;"><img class="tbl9img" src="{{public_path('assets/examination.png')}}" alt=""></td>
                <td scope="col" class="tbl9text" style=" border: 0;">examination</td>
            </tr>
            <tr>
                <td scope="col"  style="width: 20px; border: 0;"><img class="tbl9img" src="{{public_path('assets/refused.png')}}" alt=""></td>
                <td scope="col" class=" tbl9text" style=" border: 0;">refused</td>
            </tr>
            <tr>
                <td scope="col" class="col1" style="width: 20px; border: 0;"><img class="tbl9img" src="{{public_path('assets/publication.png')}}" alt=""></td>
                <td scope="col" class="col1 tbl9text" style=" border: 0;">publication</td>
            </tr>
            <tr>
                <td scope="col" class="col1" style="width: 20px; border: 0;"><img class="tbl9img" src="{{public_path('assets/pending invalidation or cancellation.png')}}" alt=""></td>
                <td scope="col" class="col1 tbl9text" style=" border: 0;">pending cancellation or invalidation</td>
            </tr>
            <tr>
                <td scope="col" class="col1" style="width: 20px; border: 0;"><img class="tbl9img" src="{{public_path('assets/expired, invalidated or cancelled.png')}}" alt=""></td>
                <td scope="col" class="col1 tbl9text" style=" border: 0;">expired, cancelled or invalidated</td>
            </tr>
            <tr>
                <td scope="col" class="col1" style="width: 20px; border: 0;"><img class="tbl9img" src="{{public_path('assets/issued and active.png')}}" alt=""></td>
                <td scope="col" class="col1 tbl9text" style=" border: 0;">issued and active</td>
            </tr>
            </thead>
        </table>

    </div>
</main>


</body>

</html>
