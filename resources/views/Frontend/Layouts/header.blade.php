<header class="iq_header_1" style="background-color: #ffffff;">
    <div class="container">
        <!-- Logo Wrap Start -->
        <div class="iq_logo " style="margin-top: 10px">
            <a href="{{route('landing')}}"><img src="{{ asset('frontend/images/logo.png')}}" alt="Iqoniq Themes" height="95" width="85"></a>
        </div>
        <!-- Logo Wrap Start -->
        <!-- Top Strip Wrap Start -->
        <div class="iq_ui_element">
            <!-- Top Strip Wrap Start -->
            <div class="iq_top_strip">
                <ul class="navbar-nav">
                    <li class="nav-item dropdown dropdown-user" style="width: 100pxlogo">
                        <a href="#" class="navbar-nav-link d-flex align-items-center">
                            @php
                                $noticeboard = Qs::getNotices();
                            @endphp
                            @if(isset($noticeboard))
                                <div class="text-carousel">
                                    <div class="text-carousel-inner" style="animation: slideText {{ count($noticeboard) * 14 }}s linear infinite;">
                                        @foreach($noticeboard as $notice)
                                            <span>{{ $notice }}</span>
                                            @if(!$loop->last) <span class="separator">|</span> @endif
                                        @endforeach
                                    </div>
                            @endif
                        </a>
                    </li>
                </ul>
                <div class="pull-right">
                    <div class="iq_top_contact pull-left">
                        <span>
                            <a class="date" href="#"> Call: +088 01768198718 </a>
                        </span>
                    </div>
                </div>
            </div>

            <!-- Top Strip Wrap End -->
            <!-- Navigation wrap Start -->
            <div class="navigation-wrapper pull-left">
                <div class="navigation pull-left">
                    <ul>
                        <li ><a class="manuHome1" href="{{route('landing')}}" style="font-weight: bold"></a></li>

                        <li><a class="manuCurriculum" href="#" style="font-weight: bold"></a>
                            <ul class="children ">
                                <li><a  class="manuCurriculum1" href=""></a></li>
                                <li><a class="manuCurriculum2" href=""></a></li>
                                <li><a class="manuCurriculum3" href=""></a></li>
                                <li><a class="manuCurriculum4" href=""></a></li>
                            </ul>
                        </li>

                        <li><a class="manuAdmissionProcess" href="#" style="font-weight: bold"></a>
                            <ul class="children">
                                <li><a class="manuAdmissionProcess1" href="{{route('admission-notice')}}">Admission Notice</a></li>
{{--                                <li><a class="manuAdmissionProcess2" href="{{route('admission-process')}}">Admission Procedure</a></li>--}}
                                <li><a class="manuAdmissionProcess3" href="{{route('admission-terms')}}">Admission Terms and Conditions</a></li>
{{--                                <li><a class="manuAcademic5"  href="{{route('payment-fee')}}">Fee Payment</a></li>--}}
                            </ul>
                        </li>
                        <li><a class="manuDirectors" href="#" style="font-weight: bold"></a>
                            <ul class="children">
                                <li><a class="manuDirectors1" href="{{route('teacher-info')}}" >Teachers</a></li>
                                <li><a class="manuDirectors2" href="{{route('staff-info')}}">Other Staff</a></li>
                                <li><a class="manuDirectors3" href="{{route('food-facilities')}}">Food Facilities</a></li>
                            </ul>
                        </li>
                        <li><a class="manuMadrasaGallery" href="{{route('gallary')}}" style="font-weight: bold"></a></li>
                        <li><a class="manuContact" href="{{route('contact-us')}}" style="font-weight: bold"></a></li>
                        <li><a class="manuAdministration" href="{{route('home')}}" style="font-weight: bold"></a></li>
                    </ul>
                </div>
                <!-- DL Menu Start -->
                <div id="mg-responsive-navigation" class="dl-menuwrapper">
                    <button class="dl-trigger">Open Menu</button>
                    <ul class="dl-menu">
                        <li class="menu-item mg-parent-menu">
                            <a class="manuHome1" href="{{route('landing')}}"></a>
                        </li>
                        <li class="menu-item mg-parent-menu"><a class="manuCurriculum" href="#"></a>
                            <ul class="dl-submenu">
                                <li><a class="manuCurriculum1" href="#"></a></li>
                                <li><a  class="manuCurriculum2" href="#"></a></li>
                                <li><a  class="manuCurriculum3" href="#"></a></li>
                                <li><a  class="manuCurriculum4" href="#"></a></li>
                            </ul>
                        </li>
                        <li class="menu-item mg-parent-menu"><a class="manuAdmissionProcess"  href="#"></a>
                            <ul class="dl-submenu">
                                <li><a class="manuAdmissionProcess1" href="{{route('admission-notice')}}">Admission Notice</a></li>
{{--                                <li><a class="manuAdmissionProcess2" href="{{route('admission-process')}}">Admission Procedure</a></li>--}}
                                <li><a class="manuAdmissionProcess3" href="{{route('admission-terms')}}">Admission Terms and Conditions</a></li>
{{--                                <li><a class="manuAcademic5" href="{{route('payment-fee')}}"> Payment Fee</a></li>--}}
                            </ul>
                        </li>
                        <li class="menu-item mg-parent-menu"><a class="manuDirectors" href="#"></a>
                            <ul class="dl-submenu">
                                <li><a class="manuDirectors1" href="{{route('teacher-info')}}">Teachers</a></li>
                                <li><a class="manuDirectors2" href="{{route('staff-info')}}">Other Staff</a></li>
                                <li><a class="manuDirectors3" href="{{route('food-facilities')}}">Food Facilities</a></li>
                            </ul>
                        </li>
                        <li class="menu-item mg-parent-menu">
                            <a  class="manuMadrasaGallery" href="{{route('gallary')}}"></a>
                        </li>
                        <li class="menu-item mg-parent-menu">
                            <a class="manuContact" href="{{route('contact-us')}}"></a>
                        </li>

                        <li class="menu-item mg-parent-menu">
                            <a class="manuAdministration" href="{{route('home')}}"></a>
                        </li>
                    </ul>
                </div>

                <!-- DL Menu END -->
                <!-- Search Wrap Start -->
                <div >
{{--                    <button data-toggle="modal" style="background-color: orange;color: white; margin-right: 7px" data-target="#search-box"><i class="fa fa-search " ></i></button>--}}
                    <!-- Search Wrap End -->
{{--                    <a id="languageToggle" class="pull-right" style="color: #000000" onclick="toggleLanguage()">En<i class="fa fa-toggle-on fa-2x" style="margin-right: 7px;margin-left: 7px;color: #000000"></i>bn</a>--}}
                </div>
            </div>
            <!-- Navigation wrap End -->
        </div>
        <!-- Top Strip Wrap End -->
    </div>
</header>
<!--Header Wrap End-->
<!--Banner Wrap Start-->
@yield('banner')
<!--Banner Wrap End-->
<!--Iqoniq Content Start-->
