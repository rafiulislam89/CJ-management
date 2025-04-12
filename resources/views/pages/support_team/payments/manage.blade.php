@extends('layouts.master')
@section('page_title', 'Student Payments')
@section('content')
    @if($selected)
        <div class="card">
            <div class="card-header header-elements-inline">
                <h6 class="card-title"> Student Payments</h6>
                {!! Qs::getPanelOptions() !!}
            </div>
            <div class="card-body">
                <table class="table datatable-button-html5-columns">
                    <thead>
                    <tr>
                        <th>S/N</th>
                        <th>Photo</th>
                        <th>Name</th>
                        <th>ADM_No</th>
                        <th>Payments</th>
                    </tr>
                    </thead>
                    <tbody>
                    @foreach($students as $s)
                        <tr>
                            <td>{{ $loop->iteration }}</td>
                            <td><img class="rounded-circle" style="height: 40px; width: 40px;" src="{{ asset($s->user->photo) }}" alt="photo"></td>
                            <td>{{ $s->user->name }}</td>
                            <td>{{ $s->adm_no }}</td>
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
