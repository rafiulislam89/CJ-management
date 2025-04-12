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
    <div class="iner_banner ent_detail">
        <div class="container">
            <h5 class="ourGallery"></h5>
            <div class="banner_iner_capstion">
                <ul>
                    <li><a class="galleryHome" href="#"></a></li>
                    <li><a class="gallery" href="#"></a></li>
                </ul>
            </div>
        </div>
    </div>
    <!--Banner Wrap End-->
    <!--Iqoniq Content Start-->
    <div class="iq_content_wrap">
        <!--Our Gallery Wrap Start-->
        <section class="iq_gallery_bg">
            <div class="main-gallery">
                <!--Gallery List Wrap Start-->
                <div class="col-md-4 col-sm-6">
                    <div class="thumb">
                        <figure>
                            <img src="{{ asset('frontend/extra-images/gall-1.jpeg') }}"
                                 alt="Image Here"
                                 style="max-width:420px; max-height: 230px;">                            <figcaption class="overlay1">
                                <div class="link-wrapper">
                                    <a href="#"><i class="fa fa-search"></i></a>
                                    <a href="#"><i class="fa fa-link"></i></a>
                                    <h6>Lorem Ipsum</h6>
                                </div>
                            </figcaption>
                        </figure>
                    </div>
                </div>
                <!--Gallery List Wrap End-->
                <!--Gallery List Wrap Start-->
                <div class="col-md-4 col-sm-6">
                    <div class="thumb">
                        <figure>
                            <img src="{{ asset('frontend/extra-images/gall-2.jpeg') }}"
                                 alt="Image Here"
                                 style="max-width:420px; max-height: 230px;">
                            <figcaption class="overlay1">
                                <div class="link-wrapper">
                                    <a href="#"><i class="fa fa-search"></i></a>
                                    <a href="#"><i class="fa fa-link"></i></a>
                                    <h6>Lorem Ipsum</h6>
                                </div>
                            </figcaption>
                        </figure>
                    </div>
                </div>
                <!--Gallery List Wrap End-->
                <!--Gallery List Wrap Start-->
                <div class="col-md-4 col-sm-6">
                    <div class="thumb">
                        <figure>
                            <img src="{{ asset('frontend/extra-images/gall-3.jpeg') }}"
                                 alt="Image Here"
                                 style="max-width:420px; max-height: 230px;">                              <figcaption class="overlay1">
                                <div class="link-wrapper">
                                    <a href="#"><i class="fa fa-search"></i></a>
                                    <a href="#"><i class="fa fa-link"></i></a>
                                    <h6>Lorem Ipsum</h6>
                                </div>
                            </figcaption>
                        </figure>
                    </div>
                </div>
                <!--Gallery List Wrap End-->
                <!--Gallery List Wrap Start-->
                <div class="col-md-4 col-sm-6">
                    <div class="thumb">
                        <figure>
                            <img src="{{ asset('frontend/extra-images/gall-4.jpeg') }}"
                                 alt="Image Here"
                                 style="max-width:420px; max-height: 230px;">                              <figcaption class="overlay1">
                                <div class="link-wrapper">
                                    <a href="#"><i class="fa fa-search"></i></a>
                                    <a href="#"><i class="fa fa-link"></i></a>
                                    <h6>Lorem Ipsum</h6>
                                </div>
                            </figcaption>
                        </figure>
                    </div>
                </div>
                <!--Gallery List Wrap End-->
                <!--Gallery List Wrap Start-->
                <div class="col-md-4 col-sm-6">
                    <div class="thumb">
                        <figure>
                            <img src="{{ asset('frontend/extra-images/gall-5.jpeg') }}"
                                 alt="Image Here"
                                 style="max-width:420px; max-height: 230px;">                              <figcaption class="overlay1">
                                <div class="link-wrapper">
                                    <a href="#"><i class="fa fa-search"></i></a>
                                    <a href="#"><i class="fa fa-link"></i></a>
                                    <h6>Lorem Ipsum</h6>
                                </div>
                            </figcaption>
                        </figure>
                    </div>
                </div>
                <!--Gallery List Wrap End-->
                <!--Gallery List Wrap Start-->
                <div class="col-md-4 col-sm-6">
                    <div class="thumb">
                        <figure>
                            <img src="{{ asset('frontend/extra-images/gall-6.jpeg') }}"
                                 alt="Image Here"
                                 style="max-width:420px; max-height: 230px;">                              <figcaption class="overlay1">
                                <div class="link-wrapper">
                                    <a href="#"><i class="fa fa-search"></i></a>
                                    <a href="#"><i class="fa fa-link"></i></a>
                                    <h6>Lorem Ipsum</h6>
                                </div>
                            </figcaption>
                        </figure>
                    </div>
                </div>
                <!--Gallery List Wrap End-->
                <!--Gallery List Wrap Start-->
                <div class="col-md-4 col-sm-6">
                    <div class="thumb">
                        <figure>
                            <img src="{{ asset('frontend/extra-images/gall-7.jpeg') }}"
                                 alt="Image Here"
                                 style="max-width:420px; max-height: 230px;">                              <figcaption class="overlay1">
                                <div class="link-wrapper">
                                    <a href="#"><i class="fa fa-search"></i></a>
                                    <a href="#"><i class="fa fa-link"></i></a>
                                    <h6>Lorem Ipsum</h6>
                                </div>
                            </figcaption>
                        </figure>
                    </div>
                </div>
                <!--Gallery List Wrap End-->
                <!--Gallery List Wrap Start-->
                <div class="col-md-4 col-sm-6">
                    <div class="thumb">
                        <figure>
                            <img src="{{ asset('frontend/extra-images/gall-8.jpeg') }}"
                                 alt="Image Here"
                                 style="max-width:420px; max-height: 230px;">
                            <figcaption class="overlay1">
                                <div class="link-wrapper">
                                    <a href="#"><i class="fa fa-search"></i></a>
                                    <a href="#"><i class="fa fa-link"></i></a>
                                    <h6>Lorem Ipsum</h6>
                                </div>
                            </figcaption>
                        </figure>
                    </div>
                </div>
                <!--Gallery List Wrap End-->
                <!--Gallery List Wrap Start-->
                <div class="col-md-4 col-sm-6">
                    <div class="thumb">
                        <figure>
                            <img src="{{ asset('frontend/extra-images/gall-9.jpeg') }}"
                                 alt="Image Here"
                                 style="max-width:420px; max-height: 230px;">                              <figcaption class="overlay1">
                                <div class="link-wrapper">
                                    <a href="#"><i class="fa fa-search"></i></a>
                                    <a href="#"><i class="fa fa-link"></i></a>
                                    <h6>Lorem Ipsum</h6>
                                </div>
                            </figcaption>
                        </figure>
                    </div>
                </div>
                <!--Gallery List Wrap End-->
            </div>
        </section>
        <!--Our Gallery Wrap End-->
    </div>
@endsection


@section('scripts')
    <script src="{{asset('/')}}frontend/js/gallary.localization.js"></script>
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

