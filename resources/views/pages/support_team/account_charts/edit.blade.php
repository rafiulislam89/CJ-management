@extends('layouts.master')
@section('page_title', 'Edit Account')
@section('content')

    <div class="card">
        <div class="card-header header-elements-inline">
            <h6 class="card-title">Edit Chart of Account</h6>
            {!! Qs::getPanelOptions() !!}
        </div>

        <div class="card-body">
            <form method="post" action="{{ route('account_charts.update', $account->id) }}">
                @csrf
                @method('PUT')

                <div class="row">
                    <div class="col-md-6">

                        <div class="form-group row">
                            <label class="col-lg-4 col-form-label font-weight-semibold">Account Code <span class="text-danger">*</span></label>
                            <div class="col-lg-8">
                                <input name="code" value="{{ old('code', $account->code) }}" required type="text" class="form-control">
                            </div>
                        </div>

                        <div class="form-group row">
                            <label class="col-lg-4 col-form-label font-weight-semibold">Account Name <span class="text-danger">*</span></label>
                            <div class="col-lg-8">
                                <input name="name" value="{{ old('name', $account->name) }}" required type="text" class="form-control">
                            </div>
                        </div>

                        <div class="form-group row">
                            <label class="col-lg-4 col-form-label font-weight-semibold">Account Type <span class="text-danger">*</span></label>
                            <div class="col-lg-8">
                                <select required name="type" class="form-control select">
                                    <option value="asset" {{ old('type', $account->type) == 'asset' ? 'selected' : '' }}>Asset</option>
                                    <option value="liability" {{ old('type', $account->type) == 'liability' ? 'selected' : '' }}>Liability</option>
                                    <option value="equity" {{ old('type', $account->type) == 'equity' ? 'selected' : '' }}>Equity</option>
                                    <option value="income" {{ old('type', $account->type) == 'income' ? 'selected' : '' }}>Income</option>
                                    <option value="expense" {{ old('type', $account->type) == 'expense' ? 'selected' : '' }}>Expense</option>
                                </select>
                            </div>
                        </div>

                        <div class="form-group row">
                            <label class="col-lg-4 col-form-label font-weight-semibold">Opening Balance</label>
                            <div class="col-lg-8">
                                <input name="opening_balance" value="{{ old('opening_balance', $account->opening_balance) }}" type="number" step="0.01" class="form-control">
                            </div>
                        </div>

                        <div class="form-group row">
                            <label class="col-lg-4 col-form-label font-weight-semibold">Status</label>
                            <div class="col-lg-8">
                                <select name="status" class="form-control select">
                                    <option value="active" {{ old('status', $account->status) == 'active' ? 'selected' : '' }}>Active</option>
                                    <option value="inactive" {{ old('status', $account->status) == 'inactive' ? 'selected' : '' }}>Inactive</option>
                                </select>
                            </div>
                        </div>

                        <div class="text-right">
                            <button type="submit" class="btn btn-primary">Update Account <i class="icon-paperplane ml-2"></i></button>
                        </div>

                    </div>
                </div>
            </form>
        </div>
    </div>

@endsection
