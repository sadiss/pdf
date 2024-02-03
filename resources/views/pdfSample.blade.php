<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>
    <link rel="stylesheet" type="text/css" href="https://myserver.com/pdf.php">
{{--    <link rel="stylesheet" href="{{asset('assets/app.css')}}">--}}
{{--    <link rel="stylesheet" href="{{asset('assets/bootstrap.min.css')}}">--}}

    <link rel="stylesheet" href="{{public_path('assets/bootstrap.min.css') }}">
    <link rel="stylesheet" href="{{public_path('assets/app.css')}}">
{{--    --}}
    <style>
        @page {
            margin: 200px 1px 0px !important;
        }

        header {
            position: fixed;
            margin-top:-170px;
            width: 100%;
        }

        footer {
            position: fixed;
            bottom: 0;
            height: auto;
            background-color: rgb(235,235,235);
            right: 0;
            text-align: center;
            padding: 10px 20px;
            color: rgb(11,201,201);
        }
    </style>
{{--    <style>--}}
{{--        <?php include(public_path('assets/bootstrap.min.css'));?>--}}
{{--    </style>--}}
    <title>Generate PDF</title>
</head>

<body>
<header>
    <div class="strip">
        <div class="container">
            <div class="row">
                <div class="col-6 logo">
                    <img src="{{public_path('assets/logo.jpeg')}}" alt="logo">
                </div>
                <div class="col-6 h_report_title">{{$data['h_report_title']}} 889475</div>
            </div>
        </div>
    </div>
</header>

<footer>
    Report no. 889475, page 1/4
</footer>
<main>
    <div class="container">
        <div class="row info">
            <div class="col-12">
                <p class="meta-date">Date: 13/02/2023</p>
                <p class="meta-applicant">Applicant: ABC Company</p>
                <p class="meta-mark">Subjective mark: SUPER CHOCOLATE BRAND</p>
                <p class="meta-classes">Classes: 7, 8, 9, 10, 11</p>
                <p class="meta-teritory">Teritory: China mainland</p>
            </div>
        </div>

        <div class="row">
            <div class="col-12 summary-title">SUMMARY</div>
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
            <tr>
                <td scope="row">7</td>
                <td style="background:red">Yes</td>
                <td>n/a</td>
                <td>*****</td>
                <td style="text-align: left;">Refusal is almost certain. We don't recommend applying for registration.
                </td>
            </tr>
            <tr>
                <td scope="row">8</td>
                <td style="background:#D4FB79">No</td>
                <td style="background:#FFD479">YES</td>
                <td>*****</td>
                <td style="text-align: left;">High risk of refusal. Filing not recommended.</td>
            </tr>
            <tr>
                <td scope="row">9</td>
                <td style="background:#D4FB79">No</td>
                <td style="background:#FFD479">YES</td>
                <td>*****</td>
                <td style="text-align: left;">Medium risk of refusal. Filing depends on risk & budget tolerance.</td>
            </tr>
            <tr>
                <td scope="row">10</td>
                <td style="background:#D4FB79">No</td>
                <td style="background:#FFD479">YES</td>
                <td>*****</td>
                <td style="text-align: left;">Slim risk of refusal. Recommendation to apply for registration.</td>
            </tr>
            <tr>
                <td scope="row">11</td>
                <td style="background:#D4FB79">No</td>
                <td style="background:#D4FB79">No</td>
                <td>*****</td>
                <td style="text-align: left;">Negligible risk of refusal. Recommendation to apply for registration.</td>
            </tr>
            <tr>
                <td scope='row' colspan="5" style="text-align: left; border-bottom: 1px black;">
                    * the assessment of chances for registration applies to registration in the first attempt without
                    any pre-filing actions such as: non-use cancellation or invalidation of an existing, potentially
                    conflicting mark(s). Assessment is done under foreseen circumstances. Applicant is to accept that
                    final success depends on many factors and is sole decision of trademark office on given territory.

                </td>
            </tr>
            </tbody>
        </table>

        <div class="row">
            <div class="col-12 details-title">DETAILS</div>
        </div>
        <div class="row">
            <div class="col-12 details-title">Class-7</div>
        </div>

<table class="custom-table1">
    <tbody>
    <tr>
        <td scope="col" class="col1 bggray">Teritory</td>
        <td scope="col" colspan="2" class="col2 bgwhite">China</td>
        <td scope="col" class="col1 bggray">Image</td>
    </tr>
    <tr>
        <td scope="col" class="col1 h23 bggray">Mark</td>
        <td scope="col" colspan="2" class="col2 h23 bgwhite">NUT</td>
        <!-- <td scope="col" class="col3 "></td> -->
        <td scope="col" rowspan="10" class="col3 bg-image" style="
        background: url('https://trademark.ninoxdb.com/share/g79ss4o5fh1tgck1zqzpmxl1fkzyt5r3t734');">
        </td>
    </tr>
    <tr>
        <td scope="col" class="col1 h23 bggray">Register</td>
        <td scope="col" colspan="2" class="col2  h23 bgwhite">11215442</td>
    </tr>
    <tr>
        <td scope="col" class="col1 bggray">Class</td>
        <td scope="col" colspan="2" class="col2 h23 bgwhite">7</td>
    </tr>
    <tr>
        <td scope="col" class="col1 h23 bggray">Status</td>
        <td scope="col" colspan="2" class="col2 h23 bgwhite">✓ Issued and active</td>
    </tr>
    <tr>
        <td scope="col" class="col1 h23 bggray">Mark owner</td>
        <td scope="col" colspan="2" class="col2 h23  bgwhite">我是小小苹果公司</td>
    </tr>
    <tr>
        <td scope="col" class="col1 bggray">Is mark owner individual person?</td>
        <td scope="col" colspan="2" class="col2 h23 bgwhite">NO</td>
    </tr>
    <tr>
        <td scope="col" rowspan="3" class="col1  bgwhite"></td>
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
        <td scope="col" colspan="2" style="background-color: red; text-align: center; color: white;" class="col2">IDENTICAL</td>
    </tr>
    <td scope="col" class="col1 row1 bggray">Remarks</td>
    <td scope="col" colspan="3" style="width: 80% bgwhite"></td>
    </tr>
    </tbody>
</table>

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
        <td scope="col" colspan="2" class="col2 h23  bgwhite">ABC COMPANY</td>
    </tr>
    <tr>
        <td scope="col" class="col1 bggray">Is mark owner individual person?</td>
        <td scope="col" colspan="2" class="col2 h23 bgwhite">NO</td>
    </tr>
    <tr>
        <td scope="col" rowspan="3" class="col1  bgwhite"></td>
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
        <td scope="col" colspan="2" class="col2 h23  bgwhite">EFG COMPANY</td>
    </tr>
    <tr>
        <td scope="col" class="col1 bggray">Is mark owner individual person?</td>
        <td scope="col" colspan="2" class="col2 h23 bgwhite">YES</td>
    </tr>
    <tr>
        <td scope="col" rowspan="3" class="col1  bgwhite"></td>
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
        <td scope="col" colspan="2" class="col2 h23  bgwhite">QWERRTY COMPANY</td>
    </tr>
    <tr>
        <td scope="col" class="col1 bggray">Is mark owner individual person?</td>
        <td scope="col" colspan="2" class="col2 h23 bgwhite">YES</td>
    </tr>
    <tr>
        <td scope="col" rowspan="3" class="col1  bgwhite"></td>
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
        <td scope="col" colspan="2" class="col2 h23  bgwhite">XYZ COMPANY</td>
    </tr>
    <tr>
        <td scope="col" class="col1 bggray">Is mark owner individual person?</td>
        <td scope="col" colspan="2" class="col2 h23 bgwhite">YES</td>
    </tr>
    <tr>
        <td scope="col" rowspan="3" class="col1  bgwhite"></td>
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
        <td scope="col" colspan="2" class="col2 h23  bgwhite">XYZ COMPANY</td>
    </tr>
    <tr>
        <td scope="col" class="col1 bggray">Is mark owner individual person?</td>
        <td scope="col" colspan="2" class="col2 h23 bgwhite">YES</td>
    </tr>
    <tr>
        <td scope="col" rowspan="3" class="col1  bgwhite"></td>
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
        <td scope="col" colspan="2" class="col2 h23  bgwhite">XYZ COMPANY</td>
    </tr>
    <tr>
        <td scope="col" class="col1 bggray">Is mark owner individual person?</td>
        <td scope="col" colspan="2" class="col2 h23 bgwhite">YES</td>
    </tr>
    <tr>
        <td scope="col" rowspan="3" class="col1  bgwhite"></td>
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
        <td scope="col" colspan="2" class="col2 h23  bgwhite">XYZ COMPANY</td>
    </tr>
    <tr>
        <td scope="col" class="col1 bggray">Is mark owner individual person?</td>
        <td scope="col" colspan="2" class="col2 h23 bgwhite">YES</td>
    </tr>
    <tr>
        <td scope="col" rowspan="3" class="col1  bgwhite"></td>
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
        <td scope="col" style="width: 20px; border: 0;"><img class="tbl9img" src="{{public_path('assets/eximination.png')}}" alt=""></td>
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
    <td scope="col" class="col1" style="width: 20px; border: 0;"><img class="tbl9img" src="{{public_path('assets/pending cancellation or invalidation.png')}}" alt=""></td>
        <td scope="col" class="col1 tbl9text" style=" border: 0;">pending cancellation or invalidation</td>
    </tr>
    <tr>
    <td scope="col" class="col1" style="width: 20px; border: 0;"><img class="tbl9img" src="{{public_path('assets/expired, cancelled or invalidated.png')}}" alt=""></td>
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
