@extends('layouts.master')
@section('page_title', 'report')
@section('content')

    <div class="card">
        <div class="card-header header-elements-inline">
            <h6 class="mx-auto card-title text-black-50">{{ $report['year'] }}</h6>
            {!! Qs::getPanelOptions() !!}
        </div>

        <div class="card-body">
            <div class="tab-content">
                <div class="tab-pane fade show active" id="all-notices">
                    <!-- Filtering Form -->
                    <form method="GET" action="{{ route('yearly_profit_loss_report.index') }}">
                        <div class="row mb-3">
                            <!-- Month Dropdown -->

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
                    <table class="table">
                        <tbody>
                        <tr><th>Total Income</th> <td>{{ $report['total_income'] }}</td></tr>
                        <tr><th>Total Salaries</th> <td>{{ $report['total_salaries'] }}</td></tr>
                        <tr><th>Total Expenses</th> <td>{{ $report['total_expenses'] }}</td></tr>
                        <tr><th>Total Admission</th> <td>{{ $report['totalAdmissionThisMonth'] }}</td></tr>
                        <tr><th>Profit/Loss</th> <td>{{ $report['profit_or_loss'] }}</td></tr>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>


    </div>

@endsection
