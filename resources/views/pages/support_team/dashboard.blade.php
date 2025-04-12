@extends('layouts.master')
@section('page_title', 'My Dashboard')
@section('content')

    @if(Qs::userIsTeamSA())
       <div class="row">
           <div class="col-sm-6 col-xl-4">
               <div class="card card-body has-bg-image" style="background: linear-gradient(360deg, #1a202c, #3b82f6)">
                   <div class="media">
                       <div class="media-body">
                           <h3 class="mb-0">{{ $users->where('user_type', 'student')->count() }}</h3>
                           <span class="text-uppercase font-size-xs font-weight-bold">Total Students</span>
                       </div>

                       <div class="ml-3 align-self-center">
                           <i class="icon-users4 icon-3x opacity-75"></i>
                       </div>
                   </div>
               </div>
           </div>

           <div class="col-sm-6 col-xl-4">
               <div class="card card-body has-bg-image" style="background: linear-gradient(360deg, #1a202c, #3b82f6);">
                   <div class="media">
                       <div class="media-body">
                           <h3 class="mb-0">{{ $users->where('user_type', 'teacher')->count() }}</h3>
                           <span class="text-uppercase font-size-xs">Total Teachers</span>
                       </div>

                       <div class="ml-3 align-self-center">
                           <i class="icon-users2 icon-3x opacity-75"></i>
                       </div>
                   </div>
               </div>
           </div>

           <div class="col-sm-6 col-xl-4">
               <div class="card card-body has-bg-image" style="background: linear-gradient(360deg, #1a202c, #3b82f6)">
                   <div class="media">
                       <div class="mr-3 align-self-center">
                           <i class="icon-pointer icon-3x opacity-75"></i>
                       </div>

                       <div class="media-body text-right">
                           <h3 class="mb-0">{{ $users->where('user_type', 'admin')->count() }}</h3>
                           <span class="text-uppercase font-size-xs">Administrators</span>
                       </div>
                   </div>
               </div>
           </div>

       </div>
       @endif

    {{--Events Calendar Begins--}}
    <div class="card border-success">
        <div class="card-header header-elements-inline bg-blue-400" style="background-color: #a3d7a5">
            <h5 class="card-title">School Events Calendar</h5>
         {!! Qs::getPanelOptions() !!}
        </div>

        <div class="card-body" >
            <div class="fullcalendar-basic"></div>
        </div>
    </div>
    {{--Events Calendar Ends--}}
    @endsection
