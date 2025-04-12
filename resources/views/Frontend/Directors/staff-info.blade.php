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
                <h5 class="staffTitle"></h5>
                <div class="banner_iner_capstion">
                    <ul>
                        <li><a class="staffTitle2" href="#"></a></li>
                        <li><a class="staffTitle1"  href="#"></a></li>
                    </ul>
                </div>
            </div>
        </div>
        <section style="background-color: #f0f0f0; padding: 40px 0;">
            <div class="container">
                <!--Heading 1 Start-->
                <div class="iq_heading_1 text-center">
                    <h4 class="formerTeacherTitle">Former Teacher's <span> Expression </span></h4>
                    <p class="formerTeacherDescription">
                        I am extremely proud to have worked as a teacher at this institution. <br>
                        While working here, I not only spread the light of knowledge among students but also taught them humanitarian values.
                    </p>
                </div>
                <!--Heading 1 End-->
                <!--Testimonial Slider Start-->
                <div class="testimonial-slider">
                    <!--Testimonial Start-->
                    <div>
                        <div>
                            <div class="testimonial">
                                <div class="coures_instractor_thumb">
                                    <div class="thumb_capstion">
                                        <h5 style="text-align: center; margin-bottom: 20px;">
                                            <a class="teacherName2" href="#"></a>
                                        </h5>
                                    </div>
                                </div>
                                <p class="testimonial1"></p>
                            </div>
                        </div>
                    </div>
                    <!--Testimonial End-->
                    <!--Testimonial Start-->
                    <div>
                        <div>
                            <div class="testimonial">
                                <div class="coures_instractor_thumb">
                                    <div class="thumb_capstion">
                                        <h5 style="text-align: center; margin-bottom: 20px;">
                                            <a class="teacherName3" href="#"></a>
                                        </h5>
                                    </div>
                                </div>
                                <p class="testimonial2"></p>
                            </div>
                        </div>
                    </div>
                    <!--Testimonial End-->
                    <!--Testimonial Start-->
                    <div>
                        <div>
                            <div class="testimonial">
                                <div class="coures_instractor_thumb">
                                    <div class="thumb_capstion">
                                        <h5 style="text-align: center; margin-bottom: 20px;">
                                            <a class="teacherName1" href="#"></a>
                                        </h5>
                                    </div>
                                </div>
                                <p class="testimonial3"></p>
                            </div>
                        </div>
                    </div>
                    <!--Testimonial End-->
                </div>
                <!--Testimonial Slider End-->
            </div>
        </section>


    </div>
        @endsection

@section('scripts')
    <script src="{{asset('/')}}frontend/js/staff.localization.js"></script>
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


