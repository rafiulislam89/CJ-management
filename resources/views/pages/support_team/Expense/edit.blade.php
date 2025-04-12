@extends('layouts.master')

@section('page_title', 'Edit Expense')

@section('content')
    <div class="card">
        <div class="card-header header-elements-inline">
            <h6 class="card-title">Edit Expense</h6>
            {!! Qs::getPanelOptions() !!}
        </div>

        <div class="card-body">
            <form method="post" action="{{ route('expenses.update', $expense->id) }}">
                @csrf
                @method('PUT')
                <div class="row">
                    <div class="col-md-6">
                        <div class="form-group row">
                            <label class="col-lg-3 col-form-label font-weight-semibold">
                                Purpose <span class="text-danger">*</span>
                            </label>
                            <div class="col-lg-9">
                                <input name="purpose" value="{{ old('purpose', $expense->purpose) }}" required type="text" class="form-control @error('purpose') is-invalid @enderror" placeholder="Purpose">
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
                                <input name="amount" value="{{ old('amount', $expense->amount) }}" required type="number" class="form-control @error('amount') is-invalid @enderror" placeholder="Amount">
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
                                <input name="date" value="{{ old('date', \Carbon\Carbon::parse($expense->date)->format('Y-m-d')) }}" required type="date" class="form-control @error('date') is-invalid @enderror">
                                @error('date')
                                <small class="text-danger">{{ $message }}</small>
                                @enderror
                            </div>
                        </div>

{{--                        <div class="form-group row">--}}
{{--                            <label class="col-lg-3 col-form-label font-weight-semibold">--}}
{{--                                Type--}}
{{--                            </label>--}}
{{--                            <div class="col-lg-9">--}}
{{--                                <select class="form-control select @error('type') is-invalid @enderror" name="type">--}}
{{--                                    <option value="monthly" {{ old('type', $expense->type) == 'monthly' ? 'selected' : '' }}>Monthly</option>--}}
{{--                                    <option value="yearly" {{ old('type', $expense->type) == 'yearly' ? 'selected' : '' }}>Yearly</option>--}}
{{--                                </select>--}}
{{--                                @error('type')--}}
{{--                                <small class="text-danger">{{ $message }}</small>--}}
{{--                                @enderror--}}
{{--                            </div>--}}
{{--                        </div>--}}

                        <div class="text-right">
                            <button type="submit" class="btn btn-primary">Update <i class="icon-paperplane ml-2"></i></button>
                        </div>
                    </div>
                </div>
            </form>
        </div>
    </div>
@endsection
