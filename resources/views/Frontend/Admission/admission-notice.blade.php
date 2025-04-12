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
        @media (max-width: 480px) {
            /* Make the table scrollable on small screens */
            .table-wrapper {
                overflow-x: auto;
                -webkit-overflow-scrolling: touch;
                margin: 0;
            }

            .table {
                width: 100%;
                table-layout: fixed; /* Prevent table from overflowing */
            }

            /* Adjust margins and make the content fit better on smaller screens */
            .iq_search_courses {
                margin-left: 0 !important;
                margin-right: 0 !important;
            }

            .iq_search_courses h4 {
                font-size: 16px;
                text-align: center;
            }

            .col-md-1, .col-md-7 {
                width: 100%;
                display: block;
                text-align: left;
            }

            /* Style the breadcrumb for small screens */
            .banner_iner_capstion ul {
                font-size: 12px;
                padding-left: 0;
            }

            .banner_iner_capstion li {
                display: inline-block;
                margin-right: 5px;
            }

            .banner_iner_capstion a {
                color: #fff;
                font-size: 12px;
            }

            /* Adjust other text and headings */
            .admissionNotice {
                font-size: 18px;
                text-align: center;
                margin-bottom: 15px;
            }

            .admissionNoticeHome {
                font-size: 14px;
            }
        }
    </style>
@endsection

@section('content')
    <div class="iq_wrapper">
        <!--Banner Wrap Start-->
        <div class="iner_banner">
            <div class="container">
                <h5 class="admissionNotice"></h5>
                <div class="banner_iner_capstion">
                    <ul>
                        <li><a class="admissionNoticeHome" href="#">Home</a></li>
                        <li><a class="admissionNotice" href="#">Admission Notice</a></li>
                    </ul>
                </div>
            </div>
        </div>

        <div class="col-md-8">
            <div class="iq_search_courses" style="margin-left: 25%">

                <table class="table table-responsive">
                    <h4>মাদ্রাসা ভর্তি তথ্য ২০২৫</h4>
                    <thead>
                    <tr>
                        <th class="col-md-1">শিরোনাম</th>
                        <th class="col-md-7">বিবরণ</th>
                    </tr>
                    </thead>
                    <tbody>
                    <tr>
                        <td class="col-md-1" data-label="Title">বয়সসীমা:</td>
                        <td class="col-md-7" data-label="Description">নাজেরা প্রোগ্রামের জন্য ন্যূনতম ৪ বছর এবং হিফজ প্রোগ্রামের জন্য ন্যূনতম ৭ বছর।</td>
                    </tr>
                    <tr>
                        <td class="col-md-1" data-label="Title">প্রয়োজনীয় কাগজপত্র:</td>
                        <td class="col-md-7" data-label="Description">
                            জন্ম সনদ। সাম্প্রতিক পাসপোর্ট সাইজের ছবি (৪ কপি)।
                            পূর্ববর্তী একাডেমিক সার্টিফিকেট (যদি প্রযোজ্য হয়)।
                            অভিভাবকের জাতীয় পরিচয়পত্রের কপি।
                        </td>
                    </tr>
                    <tr>
                        <td class="col-md-1" data-label="Title">প্রদত্ত প্রোগ্রাম:</td>
                        <td class="col-md-7" data-label="Description">
                            নাজেরা কুরআন (প্রাথমিক কুরআন তেলাওয়াত)।
                            হিফজুল কুরআন (কুরআন মুখস্থকরণ)।
                            তাফসির ও হাদিস স্টাডিজ (উচ্চতর ইসলামিক স্টাডিজ)।
                            আরবি ব্যাকরণ ও ভাষা।
                        </td>
                    </tr>
                    <tr>
                        <td class="col-md-1" data-label="Title">ভর্তি শেষ তারিখ:</td>
                        <td class="col-md-7" data-label="Description">২০২৪-২৫ শিক্ষাবর্ষের জন্য ১১তম শ্রেণির অনলাইন ভর্তি সময়সীমা বাড়ানো হয়েছে। নতুন সময়সূচি অনুযায়ী, শিক্ষার্থীরা ৫ আগস্ট পর্যন্ত কলেজ ও মাদ্রাসায় অনলাইনে ভর্তি সম্পন্ন করতে পারবে।</td>
                    </tr>
                    <tr>
                        <td class="col-md-1" data-label="Title">আবেদন শুরুর তারিখ:</td>
                        <td class="col-md-7" data-label="Description">[১০/০১/২০২৫]</td>
                    </tr>
                    <tr>
                        <td class="col-md-1" data-label="Title">শেষ তারিখ:</td>
                        <td class="col-md-7" data-label="Description">[৩১/০১/২০২৫]</td>
                    </tr>
                    <tr>
                        <td class="col-md-1" data-label="Title">ভর্তি পরীক্ষা তারিখ:</td>
                        <td class="col-md-7" data-label="Description">[০২/০২/২০২৫]</td>
                    </tr>
                    <tr>
                        <td class="col-md-1" data-label="Title">ফলাফল প্রকাশ:</td>
                        <td class="col-md-7" data-label="Description">[১০/০২/২০২৫]</td>
                    </tr>
                    <tr>
                        <td class="col-md-1" data-label="Title">প্রদত্ত সুবিধাসমূহ:</td>
                        <td class="col-md-7" data-label="Description">
                            ইসলামিক পরিবেশে সুসজ্জিত শ্রেণিকক্ষ।
                            শিক্ষার্থীদের জন্য বোর্ডিং ও আবাসন সুবিধা (যদি প্রযোজ্য হয়)।
                            যোগ্য ও অভিজ্ঞ শিক্ষকবৃন্দ।
                            ইসলামিক ও আধুনিক শিক্ষার সমন্বয়।
                        </td>
                    </tr>
                    <tr>
                        <td class="col-md-1" data-label="Title">ভর্তি প্রক্রিয়া:</td>
                        <td class="col-md-7" data-label="Description">
                            মাদ্রাসার অফিস বা ওয়েবসাইট থেকে আবেদন ফর্ম সংগ্রহ করুন।
                            প্রয়োজনীয় কাগজপত্রসহ পূর্ণাঙ্গ আবেদন ফর্ম জমা দিন।
                            ভর্তি পরীক্ষা/সাক্ষাৎকার দিন।
                            নিশ্চিতকরণের পর ভর্তি ফি পরিশোধ করুন।
                        </td>
                    </tr>
                    </tbody>
                </table>

            </div>
        </div>
    </div>
    <!--Banner Wrap End-->
@endsection

@section('scripts')
    <script src="{{asset('/')}}frontend/js/admission.notice.localization.js"></script>
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
                slidesToShow: 1, // Show one slide at a time
                slidesToScroll: 1, // Scroll one slide at a time
                autoplay: true, // Enable auto sliding
                autoplaySpeed: 5000, // Delay before the next slide (5000ms = 5 seconds)
                speed: 1000, // Transition speed between slides (1000ms = 1 second)
                dots: true, // Enable dots for navigation
                arrows: true // Show navigation arrows
            });

            console.log('chutiye');
            $('#mg-responsive-navigation').dlmenu();
        });
    </script>
@endsection


