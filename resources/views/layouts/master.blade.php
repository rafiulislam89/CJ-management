<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta id="csrf-token" name="csrf-token" content="{{ csrf_token() }}">
    <meta name="author" content="CJ Inspired">

    <title> @yield('page_title') | {{ config('app.name') }} </title>
    <style>
        .sidebar-main { background: linear-gradient(270deg, #1a202c, #3b82f6);  box-shadow: 10px 10px 6px rgba(19, 19, 19, 0.19);}
        .navbar { background: linear-gradient(270deg, #1a202c,#bbe1bd, #3b82f6); box-shadow: 10px 10px 6px rgba(0, 0, 0, 0.19); }
        .text-carousel {
            width: 700px; /* Adjust width */
            overflow: hidden;
            white-space: nowrap;
            position: relative;
            display: inline-block;
            vertical-align: middle;
        }

        .text-carousel-inner {
            display: inline-flex;
            gap: 50px; /* Space between messages */
        }
        .separator {
            font-weight: bold;
            color: #ff0000; /* Adjust color */
            margin: 0 10px;
        }

        .text-carousel span {
            display: inline-block;
            padding: 0 10px;
            white-space: nowrap;
        }

        @keyframes slideText {
            0% { transform: translateX(50%); } /* Start immediately */
            100% { transform: translateX(-100%); } /* Moves text from right to left */
        }
    </style>
    @include('partials.inc_top')
</head>

<body class="{{ in_array(Route::currentRouteName(), ['payments.invoice', 'marks.tabulation', 'marks.show', 'ttr.manage', 'ttr.show']) ? 'sidebar-xs' : '' }}">

@include('partials.top_menu')
<div class="page-content">
    @include('partials.menu')
    <div class="content-wrapper">
        @include('partials.header')

        <div class="content">
            {{--Error Alert Area--}}
            @if($errors->any())
                <div class="alert alert-danger border-0 alert-dismissible">
                    <button type="button" class="close" data-dismiss="alert"><span>&times;</span></button>

                        @foreach($errors->all() as $er)
                            <span><i class="icon-arrow-right5"></i> {{ $er }}</span> <br>
                        @endforeach

                </div>
            @endif
            <div id="ajax-alert" style="display: none"></div>

            @yield('content')
        </div>


    </div>
</div>

@include('partials.inc_bottom')
@yield('scripts')
</body>
</html>
