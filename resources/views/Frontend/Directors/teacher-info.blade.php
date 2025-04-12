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
                <h5 class="teacherTitle">Our Teacher</h5>
                <div class="banner_iner_capstion">
                    <ul>
                        <li><a class="teacherTitle1" href="#"></a></li>
                        <li><a class="teacherTitle"  href="#"></a></li>
                    </ul>
                </div>
            </div>
        </div>
        <section class="our-teachers-page" style="background-color: #f0f0f0; padding: 40px 0;">
            <div class="container">
                <!--Teacher Wrap List Start-->
                <div class="row">
                    <!--Teacher Thumb Start-->
                    <div class="col-md-4 col-sm-6">
                        <div class="iq_teacher_style_1">
                            <figure>
                                <img src="{{ asset('frontend/extra-images/teacher-101.jpeg') }}" alt="Image Here" style="max-height: 400px;">
                            </figure>
                            <div class="text">
                                <h4><a class="NameTeacher1" href="#"></a></h4>
                                <h6 class="teacherSubTitle1" ></h6>
                                <p class="teacherDescription1">This is Photoshop's version of Lorem Ipsum. Proin gravida nibh vel velit auctor aliquet. Aenean sollicitudinris.</p>
                                <ul class="iq_footer_social">
                                    <li><a href="#"><i class="fa fa-facebook"></i></a></li>
                                    <li><a href="#"><i class="fa fa-twitter"></i></a></li>
                                    <li><a href="#"><i class="fa fa-skype"></i></a></li>
                                    <li><a href="#"><i class="fa fa-pinterest"></i></a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <!--Teacher Thumb End-->
                    <!--Teacher Thumb Start-->
                    <div class="col-md-4 col-sm-6">
                        <div class="iq_teacher_style_1">
                            <div class="text">
                                <h4><a class="NameTeacher2"  href="#"></a></h4>
                                <h6 class="teacherSubTitle2"></h6>
                                <p class="teacherDescription2">.</p>
                                <ul class="iq_footer_social">
                                    <li><a href="#"><i class="fa fa-facebook"></i></a></li>
                                    <li><a href="#"><i class="fa fa-twitter"></i></a></li>
                                    <li><a href="#"><i class="fa fa-skype"></i></a></li>
                                    <li><a href="#"><i class="fa fa-pinterest"></i></a></li>
                                </ul>
                            </div>
                            <figure>
                                <img src="{{ asset('frontend/extra-images/teacher-100.jpg') }}" alt="Image Here" style="max-height: 400px;">
                            </figure>
                        </div>
                    </div>
                    <!--Teacher Thumb End-->
                    <!--Teacher Thumb Start-->
                    <div class="col-md-4 col-sm-6">
                        <div class="iq_teacher_style_1">
                            <figure>
                                <img src="{{ asset('frontend/extra-images/teacher-102.jpeg') }}" alt="Image Here" style="max-height: 427px;">
                            </figure>
                            <div class="text">
                                <h4><a class="NameTeacher3" href="#">Dr. Mostak Ahmed</a></h4>
                                <h6 class="teacherSubTitle3">Manager</h6>
                                <p class="teacherDescription3">This is Photoshop's version of Lorem Ipsum. Proin gravida nibh vel velit auctor aliquet. Aenean sollicitudinris.</p>
                                <ul class="iq_footer_social">
                                    <li><a href="#"><i class="fa fa-facebook"></i></a></li>
                                    <li><a href="#"><i class="fa fa-twitter"></i></a></li>
                                    <li><a href="#"><i class="fa fa-skype"></i></a></li>
                                    <li><a href="#"><i class="fa fa-pinterest"></i></a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <!--Teacher Thumb End-->
                </div>
                <!--Teacher Wrap List End-->
            </div>
        </section>
        @endsection
@section('scripts')

    <script src="{{asset('/')}}frontend/js/teacher.localization.js"></script>
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


