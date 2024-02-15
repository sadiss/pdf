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
        * { font-family: DejaVu Sans, sans-serif; line-height: 1; }

        @font-face {
            font-family: 'DejaVu Sans, sans-serif Firefly Sung';
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
    <div class="strip" style="background-color: {{$data['skin']['primary_color']}}">
        <div class="container">
            <div class="row">
                <div class="col-6 logo">
                    <img src="{{$data['skin']['logo_url']}}" alt="logo">
                </div>
                <?php
                if(strlen($data['h_report_title']) > 40){
                    $fontSize = 12;
                } else {
                    $fontSize = '20px';
                }
                ?>
                <div class="col-6 h_report_title">{{$data['h_report_title']}} {{$data['dataset']['reportid']}}</div>
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
                <p class="meta-date">{{$data['h_date']}}: {{$data['dataset']['date']}}</p>
                <p class="meta-applicant">{{$data['h_applicant']}}: {{$data['dataset']['applicant']}}</p>
                <p class="meta-mark">{{$data['h_subjectivemark']}}: {{$data['dataset']['subjectivemark']}}</p>
                <p class="meta-classes">{{$data['h_classes']}}: {{$data['dataset']['classes']}}</p>
                <p class="meta-teritory">{{$data['h_territory']}}: {{$data['dataset']['territory']}}</p>
            </div>
        </div>

        <div class="row">
            <div class="col-12 summary-title">{{$data['rh_summary']}}</div>
        </div>

        <table class="custom-table">
            <thead class="header">
            <tr>
                <td scope="col" style="width: 5%">{{$data['dth_class']}}</td>
                <td scope="col" style="width: 15%">{{$data['dth_identical']}}</td>
                <td scope="col" style="width: 15%">{{$data['dth_similar']}}</td>
                <td scope="col" style="width: 15%">{{$data['dth_illustration']}}</td>
                <td scope="col" style="width: 50%">{{$data['dth_remarks']}}</td>
            </tr>
            </thead>
            <tbody class="tbody">

            @foreach($data['dataset']['summarytable'] as $row)
            <tr >
                <td scope="row">{{$row['class']}}</td>
                <td style="background:<?php echo ($row['identical'])? 'red': '#D4FB79'?>"><?php echo ($row['identical'])? 'YES': 'NO'?></td>
                <td style="background-color: @if($row['similarnumber'] == 1) #FFD479 @elseif ($row['similarnumber'] == 2) #D4FB79 @else #ffffff @endif">
                   @if($row['similarnumber'] == 1) YES @elseif ($row['similarnumber'] == 2) NO @else N/A @endif
                </td>
                <td><img src="{{public_path('assets/'.$row['illustration'].'.png')}}" alt="" style="width: 80px;"></td>
                <td style="text-align: left; padding-left: 10px;">{{$row['remarks']}}</td>
            </tr>

            @endforeach

            @if(isset($data['dataset']['summurytablefootertext']))
                <tr>
                    <td scope='row' colspan="5" style="text-align: left; border-bottom: 1px black;">
                        {{$data['dataset']['summurytablefootertext']}}

                    </td>
                </tr>
            @endif

            </tbody>
        </table>

        <div class="row">
            <div class="col-12 details-title">{{$data['rh_details']}}</div>
        </div>
        @foreach ($data['dataset']['detailstables'] as $row)


        <div class="row">
            <div class="col-12 details-title">Class-{{$row['class']}}</div>
        </div>

        <table class="custom-table1">
            <tbody>
            <tr>
                <td scope="col" class="col1 bggray">{{$data['sth_territory']}}</td>
                <td scope="col" colspan="2" class="col2 bgwhite">{{$row['territory']}}</td>
                <td scope="col" class="col1 bggray">{{$data['sth_image']}} </td>
            </tr>
            <tr>
                <td scope="col" class="col1 h23 bggray">{{$data['sth_mark']}}</td>
                <td scope="col" colspan="2" class="col2 h23 bgwhite">{{$row['mark']}}</td>
                <td scope="col" rowspan="10" class="col3 bg-image"
                    @if(isset($row['imageurl'])) style=" background: url({{$row['imageurl']}});" @endif>
                </td>
            </tr>
            <tr>
                <td scope="col" class="col1 h23 bggray">{{$data['sth_register']}}</td>
                <td scope="col" colspan="2" class="col2  h23 bgwhite">{{$row['register']}}</td>
            </tr>
            <tr>
                <td scope="col" class="col1 bggray">{{$data['sth_class']}}</td>
                <td scope="col" colspan="2" class="col2 h23 bgwhite">{{$row['class']}}</td>
            </tr>
            <tr>
                <td scope="col" class="col1 h23 bggray">{{$data['sth_status']}}</td>
                <td scope="col" colspan="2" class="col2 h23 bgwhite">{{$row['status']}}</td>
            </tr>
            <tr>
                <td scope="col" class="col1 h23 bggray">{{$data['sth_markowner']}}</td>
                <td scope="col" colspan="2" class="col2 h23  bgwhite chienese">{{$row['markowner']}}</td>
            </tr>
            <tr>
                <td scope="col" class="col1 bggray">{{$data['sth_individual']}}</td>
                <td scope="col" colspan="2" class="col2 h23 bgwhite">{{$row['individual']}}</td>
            </tr>
            <tr>
                <td scope="col" rowspan="3" class="col1  bgwhite bg-icon" style="background-image:
                    @if ($row['evaluationnumber'] == 1) url('{{public_path('assets/examination.png')}}')
                    @elseif ($row['evaluationnumber'] == 2) url('{{public_path('assets/refused.png')}}')
                    @elseif ($row['evaluationnumber'] == 3) url('{{public_path('assets/publication.png')}}')
                    @elseif ($row['evaluationnumber'] == 4) url('{{public_path('assets/pending cancellation or invalidation.png')}}')
                    @elseif ($row['evaluationnumber'] == 5) url('{{public_path('assets/expired, cancelled or invalidated.png')}}')
                    @elseif ($row['evaluationnumber'] == 6) url('{{public_path('assets/issued and active.png')}}')
                    @endif; background-position: center center; background-size: 50% 95%; background-repeat: no-repeat">
                </td>
                <td scope="col" class="col2 row1 bggray">{{$data['sth_filingdate']}}</td>
                <td scope="col" class="col2 row1 bgwhite">{{$row['filingdate']}}</td>
            </tr>
            @if(isset($row['regstartdate']))
                <tr>
                    <td scope="col" class="col2 row1 bggray">{{$data['sth_regstartdate']}}</td>
                    <td scope="col" class="col2 row1 bgwhite">{{$row['regstartdate']}}</td>
                </tr>
            @endif
            @if(isset($row['regenddate']))
                <tr>
                    <td scope="col" class="col2 row1 bggray">{{$data['sth_regenddate']}}</td>
                    <td scope="col" class="col2 row1 bgwhite">{{$row['regenddate']}}</td>
                </tr>
            @endif

            <tr>
                <td scope="col" class="col1 row1 bggray">{{$data['sth_evaluation']}}</td>
                <td scope="col" colspan="2" class="col2"
                    style="background: @if ($row['evaluationnumber'] == 1) #F16454
                                           @elseif ($row['evaluationnumber'] == 2) #FA9102
                                           @elseif ($row['evaluationnumber'] == 3) #FDFB65
                                           @elseif ($row['evaluationnumber'] == 4) #D4FB79
                                           @elseif ($row['evaluationnumber'] == 5) #81f45a
                                           @elseif ($row['evaluationnumber'] == 6) #81f45a
                                       @endif; text-align: center; text-transform: uppercase; color:#fff;"
                >{{$row['evaluation']}}
                </td>
            </tr>
            @if(isset($row['remarks']))
                <tr>
                <td scope="col" class="col1 row1 bggray">
                    {{$data['dth_remarks']}}
                </td>
                <td scope="col" colspan="3" style="width: 80%; background: #fff;">{{$row['remarks']}}</td>
                </tr>
            @endif
            </tbody>
        </table>

        <div class="page-break"></div>

        @endforeach

        <div class="row">
            <div class="col-12 class-7">{{$data['dth_class']}}-{{$data['dataset']['classes']}}</div>
        </div>

        <br>

        <div class="row, details-title" style="text-align: left;">
            {{$data['dataset']['nosamemarktext']}}
        </div>

        <br>

        <div class="row, details-title">
            {{$data['lastpage_additional_header']}}
        </div>

        <br>
        @if(isset($data['dataset']['additionalinfo']))
            <div class="row, details-title" style="text-align: left;">
                {{$data['dataset']['additionalinfo']}}
            </div>
        @endif
        <br>
        @if(isset($data['dataset']['disclaimer']))
            <div class="row, details-title">
                {{$data['lastpage_disclaimer_header']}}
            </div>

            <br>
            <div class="row, details-title" style="text-align: justify; font-size: 8;">
                {{$data['dataset']['disclaimer']}}
            </div>
        @endif
    </div>
</main>


</body>

</html>
