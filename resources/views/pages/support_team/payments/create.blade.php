@extends('layouts.master')
@section('page_title', 'Monthly fees')
@section('content')

    <div class="card">
        <div class="card-header header-elements-inline">
            <h6 class="card-title">মাসিক ফি-সমুহ</h6>
            {!! Qs::getPanelOptions() !!}
        </div>

        <div class="card-body">
            <div class="row">
                <div class="col-md-6">
                    <form method="post" action="{{ route('payments.store') }}">
                        @csrf
{{--                        <div class="form-group row">--}}
{{--                            <label class="col-lg-3 col-form-label font-weight-semibold">Title <span class="text-danger">*</span></label>--}}
{{--                            <div class="col-lg-9">--}}
{{--                                <input name="title" value="{{ old('title') }}" required type="text" class="form-control" placeholder="Eg. School Fees">--}}
{{--                            </div>--}}
{{--                        </div>--}}

                        <div class="form-group row">
                            <label for="amount" class="col-lg-3 col-form-label font-weight-semibold"> ভর্তি ফি  <span class="text-danger">*</span></label>
                            <div class="col-lg-9">
                                <input class="form-control" value="{{$p->admission_fee}}" required name="admission_fee" id="admission_fee" type="number">
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="amount" class="col-lg-3 col-form-label font-weight-semibold"> বেতন <span class="text-danger">*</span></label>
                            <div class="col-lg-9">
                                <input class="form-control" value="{{ $p->tution_fee }}" required name="tution_fee" id="tution_fee" type="number">
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="amount" class="col-lg-3 col-form-label font-weight-semibold"> খোরাকি <span class="text-danger">*</span></label>
                            <div class="col-lg-9">
                                <input class="form-control" value="{{ $p->khoraki }}" required name="khoraki" id="khoraki" type="number">
                            </div>
                        </div>

{{--                        <div class="form-group row">--}}
{{--                            <label for="description" class="col-lg-3 col-form-label font-weight-semibold">বিস্তারিত</label>--}}
{{--                            <div class="col-lg-9">--}}
{{--                                <input class="form-control" value="{{ old('description') }}" name="description" id="description" type="text">--}}
{{--                            </div>--}}
{{--                        </div>--}}

                        <div class="text-right">
                            <button type="submit" class="btn btn-primary">Submit form <i class="icon-paperplane ml-2"></i></button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>

    {{--Payment Create Ends--}}

@endsection
