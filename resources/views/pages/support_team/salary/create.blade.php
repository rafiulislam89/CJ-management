@extends('layouts.master')
@section('page_title', 'Create Salary')
@section('content')
    <div class="card">
        <div class="card-header header-elements-inline">
            <h6 class="card-title">Create New Salary Record</h6>
            {!! Qs::getPanelOptions() !!}
        </div>

        <div class="card-body">
            <form method="post" action="{{ route('salaries.store') }}" class="">
{{--            <form method="post" action="{{ route('salaries.store') }}">--}}

            @csrf
                <div class="form-group row">
                    <label class="col-lg-3 col-form-label font-weight-semibold">Receiver <span class="text-danger">*</span></label>
                    <div class="col-lg-9">
                        <select required class="form-control select" name="receiver">
                            <option value="">Select Receiver</option>
                            @foreach($users as $user)
                                <option value="{{ $user->id }}">{{ $user->name }}</option>
                            @endforeach
                        </select>
                        @error('receiver') <span class="text-danger">{{ $message }}</span> @enderror
                    </div>
                </div>

                <div class="form-group row">
                    <label class="col-lg-3 col-form-label font-weight-semibold">Amount <span class="text-danger">*</span></label>
                    <div class="col-lg-9">
                        <input name="amount" required type="number" step="0.01" min="0" class="form-control" placeholder="Enter amount">
                        @error('amount') <span class="text-danger">{{ $message }}</span> @enderror
                    </div>
                </div>
                <div class="form-group row">
                    <label class="col-lg-3 col-form-label font-weight-semibold">
                        Date <span class="text-danger">*</span>
                    </label>
                    <div class="col-lg-9">
                        <input name="date" value="{{ old('date') }}" required type="date" class="form-control" placeholder="date">
                    </div>
                </div>

{{--                <div class="form-group row">--}}
{{--                    <label class="col-lg-3 col-form-label font-weight-semibold">Type <span class="text-danger">*</span></label>--}}
{{--                    <div class="col-lg-9">--}}
{{--                        <select required class="form-control select" name="type">--}}
{{--                            <option value="monthly">Monthly</option>--}}
{{--                            <option value="yearly">Yearly</option>--}}
{{--                        </select>--}}
{{--                        @error('type') <span class="text-danger">{{ $message }}</span> @enderror--}}
{{--                    </div>--}}
{{--                </div>--}}

                <div class="text-right">
                    <button type="submit" class="btn btn-primary">Submit <i class="icon-paperplane ml-2"></i></button>
                </div>
            </form>
        </div>
    </div>
@endsection
