@extends('layouts.master')
@section('page_title', 'My Dashboard')
@section('content')

    @if(Qs::userIsTeamSA())
       <div class="row">
           <div class="col-sm-6 col-xl-4">
               <div class="card card-body has-bg-image" style="background: linear-gradient(360deg, #0f172a, #10b981)">
                   <div class="media">
                       <div class="media-body">
                           <h3 class="mb-0">{{ $allocationCount }}</h3>
                           <span class="text-uppercase font-size-xs font-weight-bold">Allocated Assets (Company-wise)</span>
                       </div>

                       <div class="ml-3 align-self-center">
                           <i class="icon-clipboard3 icon-3x opacity-75"></i>                       </div>
                   </div>
               </div>
           </div>

           <div class="col-sm-6 col-xl-4">
               <div class="card card-body has-bg-image" style="background: linear-gradient(360deg, #1a202c, #e4556e); overflow: hidden;">
                   <div class="media align-items-center">
                       <div class="media-body w-100">
                           <div class="d-flex align-items-center">
                               <h3 class="mb-0 mr-2">{{ $categories->count() }}</h3>

                               <!-- Custom Ticker Integration -->
                               <div class="ticker-container flex-grow-1 ml-2">
                                   <ul>
                                       @foreach($categories as $category)
                                           <div>
                                               <li>
                                    <span class="badge badge-light text-dark font-size-xs">
                                        {{ $category->category }}: {{ $category->count }}
                                    </span>
                                               </li>
                                           </div>
                                       @endforeach
                                   </ul>
                               </div>
                           </div>
                           <span class="text-uppercase font-size-xs">Asset Categories</span>
                       </div>

                       <div class="ml-3 align-self-center">
                           <i class="icon-list2 icon-3x opacity-75"></i>
                       </div>
                   </div>
               </div>
           </div>

<style>
    .ticker-container {
        height: 30px;
        width: 100%;
        text-align: left;
        position: relative;
        overflow: hidden;
        background-color: rgba(0, 0, 0, 0.0);
        color: white;
        font-size: 1em;
    }

    .ticker-container ul {
        list-style: none;
        padding: 0;
        margin: 0;
    }

    .ticker-container ul div {
        overflow: hidden;
        position: absolute;
        z-index: 0;
        display: inline;
        min-width: 100%;
        left: 0;
        height: 100%;
        transition: 0.25s ease-in-out;
    }

    .ticker-container ul div.ticker-active {
        top: 0;
    }

    .ticker-container ul div.not-active {
        top: 30px;
    }

    .ticker-container ul div.remove {
        top: -30px;
    }

    .ticker-container ul div li {
        padding: 5px 10px;
        white-space: nowrap;
    }


</style>

           <div class="col-sm-6 col-xl-4">
               <div class="card card-body has-bg-image" style="background: linear-gradient(360deg, #1a202c, #3b82f6);">
                   <div class="media">
                       <div class="media-body">
                           <h3 class="mb-0">{{ $assetCount }}</h3> <!-- Display total inventory count -->
                           <span class="text-uppercase font-size-xs">Total Items</span> <!-- Label for inventory count -->
                       </div>

                       <div class="ml-3 align-self-center">
                           <i class="icon-box icon-3x opacity-75"></i> <!-- Icon for inventory -->
                       </div>
                   </div>
               </div>
           </div>

       </div>
       @endif

    {{--Events Calendar Begins--}}
    <div class="card border-success">
        <div class="card-header header-elements-inline bg-blue-400" style="background-color: #a3d7a5">
            <h5 class="card-title">Events Calendar</h5>
         {!! Qs::getPanelOptions() !!}
        </div>

        <div class="card-body" >
            <div class="fullcalendar-basic"></div>
        </div>
    </div>
    {{--Events Calendar Ends--}}

    <script>
        var speed = 5000;
        canTick = true;

        $(document).ready(function () {
            $('.ticker-container ul div').each(function (i) {
                if ($(window).width() >= 500) {
                    $(this).find('li').width($(window).width() - parseInt($(this).css('left')));
                }
                if (i == 0) {
                    $(this).addClass('ticker-active');
                } else {
                    $(this).addClass('not-active');
                }
                if ($(this).find('li').height() > 30) {
                    $(this).find('li').css({
                        'height': '20px',
                        'width': '200%',
                        'text-align': 'left',
                        'padding-left': '5px'
                    });
                    $(this).find('li').css('width', $(this).find('li span').width());
                }
            });
            startTicker();
            animateTickerElementHorz();
        });

        $(window).resize(function () {
            $('.ticker-container ul div').each(function () {
                if ($(this).find('li').height() > 30) {
                    $(this).css({
                        'height': '20px',
                        'width': '200%',
                        'text-align': 'left',
                        'padding-left': '5px'
                    });
                    $(this).find('li').css('width', $(this).find('li span').width());
                }
            });
        });

        function startTicker() {
            setInterval(function () {
                if (canTick) {
                    $('.ticker-container ul div.ticker-active')
                        .removeClass('ticker-active')
                        .addClass('remove');
                    if ($('.ticker-container ul div.remove').next().length) {
                        $('.ticker-container ul div.remove')
                            .next()
                            .addClass('next');
                    } else {
                        $('.ticker-container ul div')
                            .first()
                            .addClass('next');
                    }
                    $('.ticker-container ul div.next')
                        .removeClass('not-active next')
                        .addClass('ticker-active');
                    setTimeout(function () {
                        $('.ticker-container ul div.remove')
                            .css('transition', '0s ease-in-out')
                            .removeClass('remove')
                            .addClass('not-active finished');
                        setTimeout(function () {
                            $('.ticker-container ul div')
                                .css('transition', '0.25s ease-in-out');
                        }, 75);
                        animateTickerElementHorz();
                    }, 250);
                }
            }, speed);
        }

        function animateTickerElementHorz() {
            let activeLi = $('.ticker-container ul div.ticker-active li');
            if (activeLi.width() > $('.ticker-container').width()) {
                setTimeout(function () {
                    activeLi.animate({
                        'margin-left': '-' + (activeLi.width() - $('.ticker-container').width() + 15)
                    }, speed - (speed / 5), 'swing', function () {
                        setTimeout(function () {
                            $('.ticker-container ul div.finished').removeClass('finished').find('li').css('margin-left', 0);
                        }, ((speed / 5) / 2));
                    });
                }, ((speed / 5) / 2));
            }
        }

        $('.ticker-container').on('mouseover', function () {
            canTick = false;
        });

        $('.ticker-container').on('mouseout', function () {
            canTick = true;
        });
    </script>

@endsection
