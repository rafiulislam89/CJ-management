@extends('Frontend.Layouts.master')
@section('title')
    Muslihul Ummah Hifz Madrasah
@endsection
@section('links')
    <link href="{{asset('/')}}frontend/css/bootstrap.css" rel="stylesheet">
    <!-- DL Menu CSS -->
    <link href="{{asset('/')}}frontend/js/dl-menu/component.css" rel="stylesheet">
    <!-- SLICK SLIDER CSS -->
    <link rel="stylesheet" type="text/css" href="{{asset('/')}}frontend/css/slick.css"/>
    <!-- Font Awesome StyleSheet CSS -->
    <link href="{{asset('/')}}frontend/css/font-awesome.min.css" rel="stylesheet">
    <!-- Font Awesome StyleSheet CSS -->
    <link href="{{asset('/')}}frontend/css/svg.css" rel="stylesheet">
    <!-- Pretty Photo CSS -->
    <link href="{{asset('/')}}frontend/css/prettyPhoto.css" rel="stylesheet">
    <!-- Shortcodes CSS -->
    <link href="{{asset('/')}}frontend/css/shortcodes.css" rel="stylesheet">
    <!-- Widget CSS -->
    <link href="{{asset('/')}}frontend/css/widget.css" rel="stylesheet">
    <!-- Typography CSS -->
    <link href="{{asset('/')}}frontend/css/typography.css" rel="stylesheet">
    <!-- Custom Main StyleSheet CSS -->
    <link href="{{asset('/')}}frontend/style.css" rel="stylesheet">
    <!-- Color CSS -->
    <link href="{{asset('/')}}frontend/css/color.css" rel="stylesheet">
    <!-- Responsive CSS -->
    <link href="{{asset('/')}}frontend/css/responsive.css" rel="stylesheet">

    <style>
        /* Added table styling */
        .table.table-bordered {
            border: 2px solid white !important;
        }
        .table.table-bordered th,
        .table.table-bordered td {
            border: 1px solid white !important;
        }

        /* Existing mobile styles */
        @media (max-width: 480px) {
            .table {
                border: none;
            }
            .table thead {
                display: none;
            }
            .table tbody tr {
                display: block;
                margin-bottom: 10px;
                border: 1px solid #ddd;
                padding: 10px;
                background: #fff;
                border-radius: 5px;
            }
            .table td {
                display: block;
                text-align: left;
                padding: 8px;
                border-bottom: 1px solid #ddd;
                font-size: 14px;
                position: relative;
            }
            .table td:last-child {
                border-bottom: none;
            }
            .table td::before {
                content: attr(data-title);
                font-weight: bold;
                display: block;
                color: #333;
                margin-bottom: 5px;
            }
        }
    </style>
@endsection

@section('content')
    <!--Banner Wrap Start-->
    <div class="iner_banner">
        <div class="container">
            <h5 class="admissionTerms">Admission Terms and Conditions</h5>
            <div class="banner_iner_capstion">
                <ul>
                    <li><a class="admissionTermsHome" href="#">Home</a></li>
                    <li><a class="admissionTerms" href="#">Admission Terms and Conditions</a></li>
                </ul>
            </div>
        </div>
    </div>
    <!--Banner Wrap End-->

    <!-- Centered Table Section -->
    <div class="container mt-4 mb-4">
        <div class="row justify-content-center">
            <div class="col-md-8">  <!-- Adjusted column width -->
                <table class="table table-bordered">
                    <thead>
                    <tr>
                        <th class="col-md-3">শিরোনাম</th>
                        <th class="col-md-9">বর্ণনা</th>
                    </tr>
                    </thead>
                    <tbody>
                    <tr>
                        <td data-title="শিরোনাম">ডকুমেন্ট সংগ্রহ</td>
                        <td data-title="বর্ণনা">
                            - জন্ম সনদপত্র (বয়স যাচাইয়ের জন্য)।<br>
                            - পিতামাতা/অভিভাবকের জাতীয় পরিচয়পত্রের কপি।<br>
                            - পাসপোর্ট সাইজের ছবি (৪-৬ কপি)।<br>
                            - পূর্ববর্তী শিক্ষাগত সনদপত্র (যদি উচ্চতর স্তরে ভর্তি হয়)।<br>
                            - মেডিকেল সনদপত্র (যদি মাদ্রাসার দ্বারা প্রয়োজন হয়)।
                        </td>
                    </tr>
                    <tr>
                        <td data-title="শিরোনাম">ফি পরিশোধ</td>
                        <td data-title="বর্ণনা">
                            - নির্ধারিত ভর্তি ফি পরিশোধ করুন (যদি প্রযোজ্য হয়) মাদ্রাসার অফিসে অথবা অনলাইন ব্যাংকিংয়ের মাধ্যমে (যদি উপলব্ধ থাকে)।<br>
                            - পরিশোধের রশিদ সংগ্রহ করুন প্রমাণ হিসেবে।
                        </td>
                    </tr>
                    <tr>
                        <td data-title="শিরোনাম">ভর্তি পরীক্ষা/সাক্ষাৎকার</td>
                        <td data-title="বর্ণনা">
                            - ভর্তি পরীক্ষায় অংশগ্রহণ করুন, যা অন্তর্ভুক্ত করতে পারে:<br>
                            &nbsp;&nbsp;• মৌলিক কুরআন তেলাওয়াতের দক্ষতা।<br>
                            &nbsp;&nbsp;• সাধারণ জ্ঞান অথবা শিক্ষাগত প্রশ্নাবলি (উচ্চতর স্তরের জন্য)।<br>
                            &nbsp;&nbsp;• শৃঙ্খলা এবং প্রস্তুতি মূল্যায়ন করার জন্য মৌখিক সাক্ষাৎকার।
                        </td>
                    </tr>
                    </tbody>
                </table>
            </div>
        </div>
    </div>

@endsection

@section('scripts')
    <script src="{{asset('/')}}frontend/js/admission.terms.localization.js"></script>
    <script src="{{asset('/')}}frontend/js/localization.js"></script>
    <!--iqoniq Wrapper End-->
    <!--Javascript Library-->
    <script src="{{asset('/')}}frontend/js/jquery.js"></script>
    <!--Bootstrap core JavaScript-->
    <script src="{{asset('/')}}frontend/js/bootstrap.min.js"></script>
    <!--SLICK SLIDER JavaScript-->
    <script src="{{asset('/')}}frontend/js/slick.min.js"></script>
    <!--Dl Menu Script-->
    <script src="{{asset('/')}}frontend/js/dl-menu/modernizr.custom.js"></script>
    <script src="{{asset('/')}}frontend/js/dl-menu/jquery.dlmenu.js"></script>
    <!--Pretty Photo JavaScript-->
    <script src="{{asset('/')}}frontend/js/jquery.prettyPhoto.js"></script>
    <!--Image Filterable JavaScript-->
    <script src="{{asset('/')}}frontend/js/jquery-filterable.js"></script>
    <!--Number Count (Waypoints) JavaScript-->
    <script src="{{asset('/')}}frontend/js/waypoints-min.js"></script>
    <!--Custom JavaScript-->
    <script src="{{asset('/')}}frontend/js/custom.js"></script>

    <script>
        $(document).ready(function() {
            $('.slider').slick({
                slidesToShow: 1,
                slidesToScroll: 1,
                autoplay: true,
                autoplaySpeed: 5000,
                speed: 1000,
                dots: true,
                arrows: true
            });

            $('#mg-responsive-navigation').dlmenu();
        })
    </script>
@endsection
