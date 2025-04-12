@extends('layouts.master')
@section('page_title', 'Student Payments Dues')
@section('content')
    @if($selected)
        <div class="card">
            <div class="card-header header-elements-inline">
                <h6 class="card-title"> Student Payments Due in {{$month, $year}}</h6>
                {!! Qs::getPanelOptions() !!}
                <a href="{{route('payments.dued.print',['month'=>$month, 'year'=>$year])}}" class="btn btn-success">print</a>
            </div>
            <div class="card-body">
                <form method="GET" action="{{ route('payments.manage.dued') }}">
                    <div class="row mb-3">
                        <!-- Month Dropdown -->
                        <div class="col-md-4">
                            <select class="form-control" name="month">
                                <option value="">Select Month</option>
                                @foreach(range(1, 12) as $m)
                                        <?php $monthName = date("F", mktime(0, 0, 0, $m, 1)); ?>
                                    <option value="{{ $monthName }}" {{ request('month') == $monthName ? 'selected' : '' }}>
                                        {{ $monthName }}
                                    </option>
                                @endforeach
                            </select>
                        </div>

                        <!-- Year Dropdown -->
                        <div class="col-md-4">
                            <select class="form-control" name="year">
                                <option value="">Select Year</option>
                                @for($y = date('Y'); $y >= 2020; $y--)
                                    <option value="{{ $y }}" {{ request('year') == $y ? 'selected' : '' }}>
                                        {{ $y }}
                                    </option>
                                @endfor
                            </select>
                        </div>

                        <!-- Submit Button -->
                        <div class="col-md-4">
                            <button type="submit" class="btn btn-primary">Filter</button>
                        </div>
                    </div>
                </form>
                <table class="table datatable-button-html5-columns">
                    <thead>
                    <tr>
                        <th>S/N</th>
                        <th>Photo</th>
                        <th>Name</th>
                        <th>date</th>
                        <th>Due</th>
                        <th>Payments</th>
                    </tr>
                    </thead>
                    <tbody>
                    @foreach($students as $s)
                        <tr>
                            <td>{{ $loop->iteration }}</td>
                            <td><img class="rounded-circle" style="height: 40px; width: 40px;" src="{{ asset($s->user->photo) }}" alt="photo"></td>
                            <td>{{ $s->user->name }}</td>
                            <td>{{ $s->admission_date }}</td>
                            <td>
{{--                                {{$s->payment_records->due??'0'}}--}}
                                @if($s->is_residential==1)
                                    {{ $s->payment_records->due??$fee_info->tution_fee+$fee_info->khoraki-$s->discount }}
                                @else
                                    {{ $s->payment_records->due??$fee_info->tution_fee-$s->discount }}
                                @endif

                            </td>
                            <td>
                                <div class="">
                                    <a href="{{ route('payments.invoice', [Qs::hash($s->user_id)]) }}" class=" btn btn-danger" > Manage Payments
                                    </a>
                                </div>
                            </td>

                        </tr>
                    @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    @endif
@endsection
