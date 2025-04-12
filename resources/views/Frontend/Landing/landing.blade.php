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

@section('banner')
    <div class="iq_banner">
        <ul class="slider">
            <li class="">
                <!--Banner Thumb START-->
                <a href="#" data-rel="prettyphoto[]" target="_blank">
                    <img src="{{ asset('frontend/extra-images/banner-100.jpg') }}" alt="Image here" style="opacity: 0.7; transition: opacity 0.5s ease-in-out;" onmouseover="this.style.opacity=1" onmouseout="this.style.opacity=0.7">                <div class="iq-caption-wrapper text-left">
                        <div class="iq_banner_caption container">
                            <div class="iq-caption">
                                <div class="bismillah iq-caption-title"></div>
                                <div  class="welcome iq-caption-text" style="font-weight: bold"></div>
                                <div class="description iq-caption-contant"></div>
                                <div class=" readButton iq_link_1" style="background-color: #43A047"></div>
                            </div>
                        </div>
                    </div>
                </a>
                <!--Banner Thumb End-->
            </li>
            <li class="">
                <!--Banner Thumb START-->
                <a href="#" data-rel="prettyphoto[]" target="_blank">
                    <img src="{{ asset('frontend/extra-images/banner-101.jpg') }}" alt="Image here" style="opacity: 0.7; transition: opacity 0.5s ease-in-out;" onmouseover="this.style.opacity=1" onmouseout="this.style.opacity=0.7">
                    <div class="iq-caption-wrapper text-left">
                        <div class="iq_banner_caption container">
                            <div class="iq-caption">
                                <div class="bismillah iq-caption-title"></div>
                                <div id="" class="welcome iq-caption-text" style="font-weight: bold"></div>
                                <div class="description iq-caption-contant"></div>
                                <div class="readButton iq_link_1" style="background-color: #43A047"></div>
                            </div>
                        </div>
                    </div>
                </a>
                <!--Banner Thumb End-->
            </li>
            <li class="">
                <!--Banner Thumb START-->
                <a href="#" data-rel="prettyphoto[]" target="_blank">
                    <img src="{{ asset('frontend/extra-images/banner-103.jpg') }}" alt="Image here" style="opacity: 0.7; transition: opacity 0.5s ease-in-out;" onmouseover="this.style.opacity=1" onmouseout="this.style.opacity=0.7">
                    <div class="iq-caption-wrapper">
                        <div class="iq_banner_caption container">
                            <div class="iq-caption text-left">
                                <div class="bismillah iq-caption-title"></div>
                                <div   class="welcome iq-caption-text" style="font-weight: bold"></div>
                                <div class="description iq-caption-contant"></div>
                                <div class="readButton iq_link_1" style="background-color: #43A047"></div>                                    </div>
                        </div>
                    </div>
                </a>
                <!--Banner Thumb End-->
            </li>
        </ul>

    </div>
@endsection
@section('content')
    <div class="iq_content_wrap">

        <!--Testimonial Slider Wrap Start-->
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

        <!--Testimonial Slider Wrap End-->

        <!--Get Best Knowledge Wrap Start-->
        <section class="iq_best_knowledge_bg">
            <!--Best Knowledge Description Wrap Start-->
            <div class="col-md-6 col-sm-offset-6 col-md-offset-6">
                <div class="iq_knowledge_des">
                    <!--Heading Wrap Start-->
                    <div class="iq_heading_1 text-left">
                        <h4 class="bestTitle">Best <span>Knowledge from Us</span><br></h4>
                    </div>
                    <!--Heading Wrap End-->
                    <h5 class="bestSubTitle">Have the courage to have firm belief in Allah</h5>
                    <p class="bestDescription">Having firm belief in Allah is the foundation of our faith. He is the Almighty, the solver of all our problems. During the toughest times in life, be patient and seek help from Allah. Allah is always with His servants and will never disappoint you. Keep your faith, success will come.</p>
                    <a class="button iq_link_1" style="background-color: #43A047"  href="#">Join Us</a>
                </div>
            </div>
            <!--Best Knowledge Description Wrap End-->
        </section>
        <!--Get Best Knowledge Wrap End-->

        <!--Our Featured Courses Wrap Start-->
        <section style="background-color: #f0f0f0; padding: 40px 0;">
            <div class="container">
                <!--Heading Wrap Start-->
                <div class="iq_heading_1 text-center">
                    <h4 class="ourFeaturedTitle">Our <span>Featured Courses</span></h4>
                    <p class="ourFeaturedDescription">Our featured courses include Nazira Quran, Hifz-ul-Quran, Tafsir and Hadith education, Arabic language, and an integrated curriculum combining Islamic ethics with modern educational methods.</p>
                </div>
                <!--Heading Wrap End-->



                <!--Tab Menu Detail Wrap Start-->
                <div id="my-tab-content" class="tab-content">
                    <div class="row tab-pane active" id="featured">
                        <!--Courses List Start-->
                        <div class="col-md-4 col-sm-6">
                            <div class="iq_course_list">
                                <figure>
                                    <img src="{{ asset('frontend/extra-images/madrsa-1.jpg') }}" style="max-height: 180px" alt="Image Here">
                                </figure>
                                <div class="iq_course_list_des">
                                    <div class="iq_course_icon">
                                        <span class="icon-student"></span>
                                    </div>
                                    <h5><a class="courseList1" href="#">Ibtidai Course</a></h5>
                                    <p class="courseListDescription1">The Ibtidai program includes Nazira Quran, prayer education, Arabic alphabets, basic Islamic knowledge, and primary character development education.</p>
                                    <ul>
                                        <li>
                                            <!--RATING AREA START-->
                                            <div class="rating_down">
                                                <div class="rating_up" style="width:100%;"></div>
                                            </div>
                                            <!--RATING AREA End-->
                                        </li>
                                        <li class="Reviews">101 Reviews</li>
                                        <li><i class="fa fa-user"></i>3.1 k</li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <!--Courses List End-->
                        <!--Courses List Start-->
                        <div class="col-md-4 col-sm-6">
                            <div class="iq_course_list">
                                <figure>
                                    <img src="{{ asset('frontend/extra-images/madrsa-2.jpg') }}" style="max-height: 180px" alt="Image Here">
                                </figure>
                                <div class="iq_course_list_des">
                                    <div class="iq_course_icon">
                                        <span class="icon-lecture"></span>
                                    </div>
                                    <h5><a class="courseList2" href="#">Dakhil Course</a></h5>
                                    <p class="courseListDescription2">The Dakhil program provides an integrated curriculum including Quran, Hadith, Arabic, Islamic history, Fiqh, Tafsir, and science and general education.</p>
                                    <ul>
                                        <li>
                                            <!--RATING AREA START-->
                                            <div class="rating_down">
                                                <div class="rating_up" style="width:100%;"></div>
                                            </div>
                                            <!--RATING AREA End-->
                                        </li>
                                        <li class="Reviews">101 Reviews</li>
                                        <li><i class="fa fa-user"></i>3.1 k</li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <!--Courses List End-->
                        <!--Courses List Start-->
                        <div class="col-md-4 hidden-sm">
                            <div class="iq_course_list">
                                <figure>
                                    <img src="{{ asset('frontend/extra-images/madrasa.jpg') }}" style="max-height: 180px" alt="Image Here">
                                </figure>
                                <div class="iq_course_list_des">
                                    <div class="iq_course_icon">
                                        <span class="icon-molecule"></span>
                                    </div>
                                    <h5><a class="courseList3" href="#">Alim Course</a></h5>
                                    <p class="courseListDescription3">The Alim program provides advanced Tafsir, Hadith, Fiqh, Usulul Fiqh, Arabic literature, Islamic philosophy, and modern subject matter education.</p>
                                    <ul>
                                        <li>
                                            <!--RATING AREA START-->
                                            <div class="rating_down">
                                                <div class="rating_up" style="width:100%;"></div>
                                            </div>
                                            <!--RATING AREA End-->
                                        </li>
                                        <li class="Reviews"></li>
                                        <li><i class="fa fa-user"></i>3.1 k</li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <!--Courses List End-->
                    </div>
                    <div class="row tab-pane" id="popular">
                        <!--Courses List Start-->
                        <div class="col-md-4 col-sm-6">
                            <div class="iq_course_list">
                                <figure>
                                    <img  src="{{ asset('frontend/extra-images/featured-course-01.jpg') }}"  alt="Image Here">
                                </figure>
                                <div class="iq_course_list_des">
                                    <div class="iq_course_icon">
                                        <span class="icon-doctor-2"></span>
                                    </div>
                                    <h5><a href="#">Neuroscience Courses</a></h5>
                                    <p>This is Photoshop's version of Lorem Ipsum. Proin gravida nibh vel velit auctor aliquet. Aenean sollicitudin, lorem quis bibendum.</p>
                                    <ul>
                                        <li>
                                            <!--RATING AREA START-->
                                            <div class="rating_down">
                                                <div class="rating_up" style="width:100%;"></div>
                                            </div>
                                            <!--RATING AREA End-->
                                        </li>
                                        <li >101 Reviews</li>
                                        <li><i class="fa fa-user"></i>3.1 k</li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <!--Courses List End-->
                        <!--Courses List Start-->
                        <div class="col-md-4 col-sm-6">
                            <div class="iq_course_list">
                                <figure>
                                    <img src="{{ asset('frontend/extra-images/featured-course-02.jpg') }}"  alt="Image Here">
                                </figure>
                                <div class="iq_course_list_des">
                                    <div class="iq_course_icon">
                                        <span class="icon-debate"></span>
                                    </div>
                                    <h5><a href="#">Politics Courses</a></h5>
                                    <p>This is Photoshop's version of Lorem Ipsum. Proin gravida nibh vel velit auctor aliquet. Aenean sollicitudin, lorem quis bibendum.</p>
                                    <ul>
                                        <li>
                                            <!--RATING AREA START-->
                                            <div class="rating_down">
                                                <div class="rating_up" style="width:100%;"></div>
                                            </div>
                                            <!--RATING AREA End-->
                                        </li>
                                        <li class="Reviews">101 Reviews</li>
                                        <li><i class="fa fa-user"></i>3.1 k</li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <!--Courses List End-->
                        <!--Courses List Start-->
                        <div class="col-md-4 hidden-sm">
                            <div class="iq_course_list">
                                <figure>
                                    <img src="{{ asset('frontend/extra-images/featured-course-03.jpg') }}"  alt="Image Here">
                                </figure>
                                <div class="iq_course_list_des">
                                    <div class="iq_course_icon">
                                        <span class="icon-medical-3"></span>
                                    </div>
                                    <h5><a href="#">Zoology Courses</a></h5>
                                    <p>This is Photoshop's version of Lorem Ipsum. Proin gravida nibh vel velit auctor aliquet. Aenean sollicitudin, lorem quis bibendum.</p>
                                    <ul>
                                        <li>
                                            <!--RATING AREA START-->
                                            <div class="rating_down">
                                                <div class="rating_up" style="width:100%;"></div>
                                            </div>
                                            <!--RATING AREA End-->
                                        </li>
                                        <li>101 Reviews</li>
                                        <li><i class="fa fa-user"></i>3.1 k</li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <!--Courses List End-->
                    </div>
                </div>
                <!--Tab Menu Detail Wrap End-->
            </div>
        </section>

        <!--Our Featured Courses Wrap End-->
        <!--Our Gallery Wrap Start-->
        <section class="iq_gallery_bg" style="background-color: #f0f0f0; padding: 40px 0;">
            <!--Heading Wrap Start-->
            <div class="iq_heading_1 text-center">
                <h4 class="gallaryTitle">Our <span>Gallery</span></h4>
                <p class="galleryDescription">Our gallery features Islamic lectures, quotes from the Holy Quran, and beautiful sayings from Hadith to reflect the profound knowledge, values, and way of life in Islam.
                    <br>Hidden in each image is the peace, love, and compassion of Islam. Visit our gallery to be inspired and find knowledge and motivation.</p>
            </div>
            <!--Heading Wrap End-->

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

        </section>

        <!--Our Gallery Wrap End-->

        <!--Number Counter Wrap Start-->
        <section class="iq_number_count_bg" style="background-color: #f0f0f0; padding: 40px 0;">
            <div class="container">
                <div class="row">
                    <!--Number Counter Start-->
                    <div class="col-md-3 col-sm-3">
                        <div class="iq_counter">
                            <i class="icon-lecture">
                                <span class="path1"></span><span class="path2"></span><span class="path3"></span><span class="path4"></span><span class="path5"></span><span class="path6"></span><span class="path7"></span><span class="path8"></span><span class="path9"></span><span class="path10"></span><span class="path11"></span><span class="path12"></span><span class="path13"></span><span class="path14"></span><span class="path15"></span><span class="path16"></span><span class="path17"></span><span class="path18"></span><span class="path19"></span><span class="path20"></span><span class="path21"></span><span class="path22"></span><span class="path23"></span><span class="path24"></span><span class="path25"></span><span class="path26"></span><span class="path27"></span><span class="path28"></span><span class="path29"></span><span class="path30"></span><span class="path31"></span><span class="path32"></span><span class="path33"></span><span class="path34"></span><span class="path35"></span><span class="path36"></span><span class="path37"></span><span class="path38"></span>
                            </i>
                            <span class="counterTeacher">21</span>
                            <h6 class="totalTeacher" >Total Teachers</h6>
                        </div>
                    </div>
                    <!--Number Counter End-->
                    <!--Number Counter Start-->
                    <div class="col-md-3 col-sm-3">
                        <div class="iq_counter">
                            <i class="icon-books">
                                <span class="path1"></span><span class="path2"></span><span class="path3"></span><span class="path4"></span><span class="path5"></span><span class="path6"></span><span class="path7"></span><span class="path8"></span><span class="path9"></span><span class="path10"></span><span class="path11"></span><span class="path12"></span><span class="path13"></span><span class="path14"></span><span class="path15"></span><span class="path16"></span><span class="path17"></span>
                            </i>
                            <span class="counterSubject">12</span>
                            <h6 class="totalSubject">Total Subjects</h6>
                        </div>
                    </div>
                    <!--Number Counter End-->
                    <!--Number Counter Start-->
                    <div class="col-md-3 col-sm-3">
                        <div class="iq_counter">
                            <i class="icon-drawing">
                                <span class="path1"></span><span class="path2"></span><span class="path3"></span><span class="path4"></span><span class="path5"></span><span class="path6"></span><span class="path7"></span><span class="path8"></span><span class="path9"></span><span class="path10"></span><span class="path11"></span><span class="path12"></span><span class="path13"></span><span class="path14"></span><span class="path15"></span><span class="path16"></span><span class="path17"></span><span class="path18"></span><span class="path19"></span><span class="path20"></span><span class="path21"></span><span class="path22"></span><span class="path23"></span><span class="path24"></span><span class="path25"></span><span class="path26"></span><span class="path27"></span><span class="path28"></span><span class="path29"></span><span class="path30"></span><span class="path31"></span><span class="path32"></span><span class="path33"></span><span class="path34"></span><span class="path35"></span>
                            </i>
                            <span class="counterGold">56</span>
                            <h6 class="totalGold">Total Gold Medals</h6>
                        </div>
                    </div>
                    <!--Number Counter End-->
                    <!--Number Counter Start-->
                    <div class="col-md-3 col-sm-3">
                        <div class="iq_counter">
                            <i class="icon-diploma-1">
                                <span class="path1"></span><span class="path2"></span><span class="path3"></span><span class="path4"></span><span class="path5"></span><span class="path6"></span><span class="path7"></span><span class="path8"></span><span class="path9"></span><span class="path10"></span><span class="path11"></span><span class="path12"></span><span class="path13"></span><span class="path14"></span><span class="path15"></span><span class="path16"></span><span class="path17"></span><span class="path18"></span><span class="path19"></span><span class="path20"></span><span class="path21"></span><span class="path22"></span><span class="path23"></span><span class="path24"></span><span class="path25"></span><span class="path26"></span><span class="path27"></span><span class="path28"></span>
                            </i>
                            <span class="counterStudent">7892</span>
                            <h6 class="totalStudent">Total Ongoing Students</h6>
                        </div>
                    </div>
                    <!--Number Counter End-->
                </div>
            </div>
        </section>

        <!--Number Counter Wrap End-->
        <!--Our Teacher Wrap Start-->
        <section style="background-color: #f0f0f0; padding: 40px 0;">
            <div class="container">
                <!--Heading Wrap Start-->
                <div class="iq_heading_1 text-center">
                    <h4 class="ourTeacherTitle">Our <span></span> Teachers</h4>
                    <p class="ourTeacherDescription">Our teachers provide deep knowledge about the peace, justice, and humanitarian values of Islam.</p>

                </div>
                <!--Heading Wrap End-->
                <!--Teacher Wrap List Start-->
                <div class="row">
                    <!--Teacher Thumb Start-->
                    <div class="col-md-4 col-sm-6">
                        <div class="iq_teacher_style_1">
                            <div class="text">
                                <h4><a class="NameTeacher1" href="#"></a></h4>
                                <h6 class="teacherSubTitle1"></h6>
                                <p class="teacherDescription1"></p>
                                <ul class="iq_footer_social">
                                    <li><a href="#"><i class="fa fa-facebook"></i></a></li>
                                    <li><a href="#"><i class="fa fa-twitter"></i></a></li>
                                    <li><a href="#"><i class="fa fa-skype"></i></a></li>
                                    <li><a href="#"><i class="fa fa-pinterest"></i></a></li>
                                </ul>
                            </div>
                            <figure>
                                <img src="{{ asset('frontend/extra-images/teacher-101.jpeg') }}" alt="Image Here" style="max-height: 500px;">
                            </figure>
                        </div>
                    </div>
                    <!--Teacher Thumb End-->
                    <!--Teacher Thumb Start-->
                    <div class="col-md-4 col-sm-6">
                        <div class="iq_teacher_style_1">
                            <figure>
                                <img src="{{ asset('frontend/extra-images/teacher-100.jpg') }}" alt="Image Here"  style="max-height: 439px;">
                            </figure>
                            <div class="text">
                                <h4><a class="NameTeacher2" href="#">22</a></h4>
                                <h6 class="teacherSubTitle2"></h6>
                                <p class="teacherDescription2"></p>
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
                    <div class="col-md-4 hidden-sm">
                        <div class="iq_teacher_style_1">
                            <div class="text">
                                <h4><a class="NameTeacher3" href="#"></a></h4>
                                <h6 class="teacherSubTitle3" ></h6>
                                <p class="teacherDescription3">This is Photoshop's version of Lorem Ipsum. Proin gravida nibh vel velit auctor aliquet. Aenean sollicitudinris.</p>
                                <ul class="iq_footer_social">
                                    <li><a href="#"><i class="fa fa-facebook"></i></a></li>
                                    <li><a href="#"><i class="fa fa-twitter"></i></a></li>
                                    <li><a href="#"><i class="fa fa-skype"></i></a></li>
                                    <li><a href="#"><i class="fa fa-pinterest"></i></a></li>
                                </ul>
                            </div>
                            <figure>
                                <img src="{{ asset('frontend/extra-images/teacher-102.jpeg') }}" alt="Image Here" style="max-height: 465px;">
                            </figure>
                        </div>
                    </div>
                    <!--Teacher Thumb End-->
                </div>
                <!--Teacher Wrap List End-->
            </div>
        </section>
        <!--Our Teacher Wrap End-->
    </div>
@endsection


@section('scripts')
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
                dots: false, // Enable dots for navigation
                arrows: true // Show navigation arrows
            });


            $('#mg-responsive-navigation').dlmenu();
        })
    </script>


@endsection
