


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


@endsection

@section('content')
    <div class="iq_wrapper">
        <!-- Header Section -->
        <header class="iq_header_1">
            <!-- Header content here -->
        </header>

        <!-- Banner Section -->
        <div class="iner_banner ent_detail">
            <div class="container">
                <h5 class="contact foodTitle"></h5>
                <div class="banner_iner_capstion">
                    <ul>
                        <li><a class="contactSubtitle1" href="#"></a></li>
                        <li><a class="contactSubtitle2" href="#"></a></li>
                    </ul>
                </div>
            </div>
        </div>

        <div class="contact-info">
            <div class="container">
                <div class="col-md-12">
                    <div class="iq_search_courses">

                        <h4>Madrasa Admission Information 2025</h4>

                        <div class="table-wrapper">
                            <table class="table table-bordered">
                                <thead>
                                <tr>
                                    <th class="text-center" style="font-weight: bold;">বার</th>
                                    <th class="text-center" style="font-weight: bold;">খাবার </th>
                                </tr>
                                </thead>
                                <tbody>
                                <tr>
                                    <td class="text-center">শনিবার</td>
                                    <td class="text-center">
                                        সকাল: ভাত, ভর্তা, ডাল<br>
                                        দুপুর: ভাত, মাছ/ডিম ভাজি, ডাল<br>
                                        রাত: ভাত, মুরগি দিয়ে সবজি, ডাল
                                    </td>
                                </tr>
                                <tr>
                                    <td class="text-center">রবিবার</td>
                                    <td class="text-center">
                                         সকাল: ভুনা খিচুরী<br>
                                        দুপুর: ভাত, গোস্ত, ডাল<br>
                                        রাত: ভাত, ডিম ভাজি, ডাল
                                    </td>

                                </tr>
                                <tr>
                                    <td class="text-center">সোমবার</td>
                                    <td class="text-center">
                                        সকাল: ভাত, ভাজি, ডাল<br>
                                        দুপুর: ভাত, ডিম, ডাল<br>
                                        রাত: ভাত, সবজি, ডাল
                                    </td>
                                </tr>
                                <tr>
                                    <td class="text-center">মঙ্গলবার</td>
                                    <td class="text-center">
                                        সকাল: ভাত, ভর্তা, ডাল<br>
                                        দুপুর: বিরিয়ানী/মোরগ পোলাও<br>
                                        রাত: ভাত, গিলা-কলিজা দিয়ে বুটের ডাল
                                    </td>
                                </tr>
                                <tr>
                                    <td class="text-center">বুধবার</td>
                                    <td class="text-center">
                                        সকাল: ভুনা খিচুরী<br>
                                        দুপুর: ভাত, মাছ/ডিম ভাজি, ডাল<br>
                                        রাত: ভাত, ভর্তা, ডাল
                                    </td>
                                </tr>
                                <tr>
                                    <td class="text-center">বৃহস্পতিবার</td>
                                    <td class="text-center">
                                        সকাল:ভাত, বুটের ডাল<br>
                                        দুপুর:ভাত, গোস্ত, ডাল<br>
                                        রাত: ভাত, ডিম ভাজি, ডাল
                                    </td>
                                </tr>
                                <tr>
                                    <td class="text-center">শুক্রবার</td>
                                    <td class="text-center">
                                        সকাল:ভাত, ভাজি, ডাল<br>
                                        দুপুর:মুরগি দিয়ে বিরিয়ানি<br>
                                        রাত: ভাত, ভাজি, ডাল
                                    </td>
                                </tr>
                                </tbody>
                            </table>
                        </div>
{{--                <h2 style="padding: 10px; >খাদ্য তালিকা</h2>--}}
{{--                <div class="row">--}}
{{--                    <div class="col-md-12 text-center">--}}
{{--                        <img src="{{ asset('frontend/extra-images/food.jpg') }}" alt="Contact Image" style="max-width: 70%; height: auto;">--}}
{{--                    </div>--}}
{{--                </div>--}}

            </div>
        </div>


    </div>
@endsection

@section('scripts')
    <script src="{{asset('/')}}frontend/js/food-facilities.localization.js"></script>
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
        })
    </script>
@endsection




