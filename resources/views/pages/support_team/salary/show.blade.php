@extends('layouts.master')
@section('page_title', 'Salary Details')
@section('content')
    <div class="row">
        <div class="col-md-12">
            <div class="card">
                <div class="card-body">
                    <ul class="nav nav-tabs nav-tabs-highlight">
                        <li class="nav-item">
                            <a href="#" class="nav-link active">Salary Information</a>
                        </li>
                    </ul>

                    <div class="tab-content">
                        <div class="tab-pane fade show active" id="basic-info">
                            <table class="table table-bordered">
                                <tbody>
{{--                                <tr>--}}
{{--                                    <td class="font-weight-bold">User ID</td>--}}
{{--                                    <td>{{ $salary->user_id }}</td>--}}
{{--                                </tr>--}}
                                <tr>
                                    <td class="font-weight-bold">Receiver ID</td>
                                    <td>{{ $salary->receiver }}</td>
                                </tr>
                                <tr>
                                    <td class="font-weight-bold">Purpose</td>
                                    <td>{{ $salary->purpose }}</td>
                                </tr>
                                <tr>
                                    <td class="font-weight-bold">Amount</td>
                                    <td>{{ number_format($salary->amount, 2) }}</td>
                                </tr>
                                <tr>
                                    <td class="font-weight-bold">Month</td>
                                    <td>{{ $salary->month }}</td>
                                </tr>
                                <tr>
                                    <td class="font-weight-bold">Year</td>
                                    <td>{{ $salary->year }}</td>
                                </tr>
                                <tr>
                                    <td class="font-weight-bold">Type</td>
                                    <td>{{ ucfirst($salary->type) }}</td>
                                </tr>
                                <tr>
                                    <td class="font-weight-bold">Created At</td>
                                    <td>{{ $salary->created_at->format('Y-m-d H:i:s') }}</td>
                                </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
