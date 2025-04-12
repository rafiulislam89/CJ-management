@extends('layouts.master')
@section('page_title', 'Expense List')
@section('content')

    <div class="card">
        <div class="card-header header-elements-inline">
            <h6 class="card-title">Expense List</h6>
            {!! Qs::getPanelOptions() !!}
        </div>

        <div class="card-body">
            <ul class="nav nav-tabs nav-tabs-highlight">
                <li class="nav-item">
                    <a href="#all-expenses" class="nav-link active" data-toggle="tab">Manage Expenses</a>
                </li>
                <li class="nav-item">
                    <a href="#add-expense" class="nav-link" data-toggle="tab"><i class="icon-plus2"></i> Add Expense</a>
                </li>
            </ul>

            <div class="tab-content">
                <!-- Expenses Table -->
                <div class="tab-pane fade show active" id="all-expenses">
                    <table class="table datatable-button-html5-columns">
                        <thead>
                        <tr>
                            <th>S/N</th>
                            <th>Purpose</th>
                            <th>Amount</th>
                            <th>Date</th> <!-- New Date Column -->
                            <th>Type</th>
                            <th>Action</th>
                        </tr>
                        </thead>
                        <tbody>
                        @foreach($expenses as $val)
                            <tr>
                                <td>{{ $loop->iteration }}</td>
                                <td>{{ $val->purpose }}</td>
                                <td>{{ number_format($val->amount, 2) }}</td>
                                <td>{{ \Carbon\Carbon::parse($val->date)->format('d M, Y') }}</td> <!-- New Date Column -->
                                <td>{{ ucfirst($val->type) }}</td>
                                <td class="text-center">
                                    <div class="list-icons">
                                        <div class="dropdown">
                                            <a href="#" class="list-icons-item" data-toggle="dropdown">
                                                <i class="icon-menu9"></i>
                                            </a>
                                            <div class="dropdown-menu dropdown-menu-left">
                                                <a href="{{ route('expenses.edit', $val->id) }}" class="dropdown-item">
                                                    <i class="icon-pencil"></i> Edit
                                                </a>
                                                <a id="{{ $val->id }}" onclick="confirmDelete(this.id)" href="#" class="dropdown-item">
                                                    <i class="icon-trash"></i> Delete
                                                </a>
                                                <form method="post" id="item-delete-{{ $val->id }}" action="{{ route('expenses.destroy', $val->id) }}" class="hidden">
                                                    @csrf @method('delete')
                                                </form>
                                            </div>
                                        </div>
                                    </div>
                                </td>
                            </tr>
                        @endforeach
                        </tbody>
                    </table>
                </div>

                <!-- Add Expense Form -->
                <div class="tab-pane fade" id="add-expense">
                    <div class="row">
                        <div class="col-md-6">
                            <form method="post" action="{{ route('expenses.store') }}">
                                @csrf
                                <div class="form-group row">
                                    <label class="col-lg-3 col-form-label font-weight-semibold">
                                        Purpose <span class="text-danger">*</span>
                                    </label>
                                    <div class="col-lg-9">
                                        <input name="purpose" value="{{ old('purpose') }}" required type="text" class="form-control @error('purpose') is-invalid @enderror" placeholder="Purpose">
                                        @error('purpose')
                                        <small class="text-danger">{{ $message }}</small>
                                        @enderror
                                    </div>
                                </div>

                                <div class="form-group row">
                                    <label class="col-lg-3 col-form-label font-weight-semibold">
                                        Amount <span class="text-danger">*</span>
                                    </label>
                                    <div class="col-lg-9">
                                        <input name="amount" value="{{ old('amount') }}" required type="number" class="form-control @error('amount') is-invalid @enderror" placeholder="Amount">
                                        @error('amount')
                                        <small class="text-danger">{{ $message }}</small>
                                        @enderror
                                    </div>
                                </div>

                                <div class="form-group row">
                                    <label class="col-lg-3 col-form-label font-weight-semibold">
                                        Date <span class="text-danger">*</span>
                                    </label>
                                    <div class="col-lg-9">
                                        <input name="date" value="{{ old('date') }}" required type="date" class="form-control @error('date') is-invalid @enderror">
                                        @error('date')
                                        <small class="text-danger">{{ $message }}</small>
                                        @enderror
                                    </div>
                                </div>

{{--                                <div class="form-group row">--}}
{{--                                    <label class="col-lg-3 col-form-label font-weight-semibold">--}}
{{--                                        Type--}}
{{--                                    </label>--}}
{{--                                    <div class="col-lg-9">--}}
{{--                                        <select class="form-control select @error('type') is-invalid @enderror" name="type">--}}
{{--                                            <option value="monthly" {{ old('type') == 'monthly' ? 'selected' : '' }}>Monthly</option>--}}
{{--                                            <option value="yearly" {{ old('type') == 'yearly' ? 'selected' : '' }}>Yearly</option>--}}
{{--                                        </select>--}}
{{--                                        @error('type')--}}
{{--                                        <small class="text-danger">{{ $message }}</small>--}}
{{--                                        @enderror--}}
{{--                                    </div>--}}
{{--                                </div>--}}

                                <div class="text-right">
                                    <button type="submit" class="btn btn-primary">Submit <i class="icon-paperplane ml-2"></i></button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div> <!-- End Add Expense Tab -->
            </div>
        </div>
    </div>



@endsection
