@extends('layouts.master')
@section('page_title', 'Chart of Accounts')
@section('content')

    <div class="card">
        <div class="card-header header-elements-inline">
            <h6 class="card-title">Chart of Accounts</h6>
            {!! Qs::getPanelOptions() !!}
        </div>

        <div class="card-body">
            <ul class="nav nav-tabs nav-tabs-highlight">
                <li class="nav-item"><a href="#all-accounts" class="nav-link active" data-toggle="tab">Manage Accounts</a></li>
                <li class="nav-item"><a href="#add-account" class="nav-link" data-toggle="tab"><i class="icon-plus2"></i> Create Account</a></li>
            </ul>

            <div class="tab-content">
                {{-- All Accounts --}}
                <div class="tab-pane fade show active" id="all-accounts">
                    <table class="table datatable-button-html5-columns">
                        <thead>
                        <tr>
                            <th>S/N</th>
                            <th>Account Code</th>
                            <th>Account Name</th>
                            <th>Type</th>
                            <th>Opening Balance</th>
                            <th>Status</th>
                            <th>Action</th>
                        </tr>
                        </thead>
                        <tbody>
                        @foreach($accounts as $acc)
                            <tr>
                                <td>{{ $loop->iteration }}</td>
                                <td>{{ $acc->code }}</td>
                                <td>{{ $acc->name }}</td>
                                <td>{{ ucfirst($acc->type) }}</td>
                                <td>{{ number_format($acc->opening_balance, 2) }}</td>
                                <td>
                                    <span class="badge badge-{{ $acc->status == 'active' ? 'success' : 'secondary' }}">
                                        {{ ucfirst($acc->status) }}
                                    </span>
                                </td>
                                <td class="text-center">
                                    <div class="list-icons">
                                        <div class="dropdown">
                                            <a href="#" class="list-icons-item" data-toggle="dropdown">
                                                <i class="icon-menu9"></i>
                                            </a>
                                            <div class="dropdown-menu dropdown-menu-left">
                                                @if(Qs::userIsTeamSA())
                                                    <a href="{{ route('account_charts.edit', $acc->id) }}" class="dropdown-item">
                                                        <i class="icon-pencil"></i> Edit
                                                    </a>
                                                @endif
                                                @if(Qs::userIsSuperAdmin())
                                                    <a href="#" onclick="confirmDelete('{{ $acc->id }}')" class="dropdown-item">
                                                        <i class="icon-trash"></i> Delete
                                                    </a>
                                                    <form method="post" id="item-delete-{{ $acc->id }}" action="{{ route('account_charts.destroy', $acc->id) }}" class="d-none">
                                                        @csrf
                                                        @method('DELETE')
                                                    </form>
                                                @endif
                                            </div>
                                        </div>
                                    </div>
                                </td>
                            </tr>
                        @endforeach
                        </tbody>
                    </table>
                </div>

                {{-- Add Account --}}
                <div class="tab-pane fade" id="add-account">
                    <form method="post" action="{{ route('account_charts.store') }}">
                        @csrf
                        <div class="row">
                            <div class="col-md-6">

                                <div class="form-group row">
                                    <label class="col-lg-4 col-form-label font-weight-semibold">Account Code <span class="text-danger">*</span></label>
                                    <div class="col-lg-8">
                                        <input name="code" value="{{ old('code') }}" required type="text" class="form-control" placeholder="E.g., 1001">
                                    </div>
                                </div>

                                <div class="form-group row">
                                    <label class="col-lg-4 col-form-label font-weight-semibold">Account Name <span class="text-danger">*</span></label>
                                    <div class="col-lg-8">
                                        <input name="name" value="{{ old('name') }}" required type="text" class="form-control" placeholder="E.g., Cash, Office Supplies">
                                    </div>
                                </div>

                                <div class="form-group row">
                                    <label class="col-lg-4 col-form-label font-weight-semibold">Account Type <span class="text-danger">*</span></label>
                                    <div class="col-lg-8">
                                        <select required name="type" class="form-control select">
                                            <option value="">Select Type</option>
                                            <option value="asset" {{ old('type') == 'asset' ? 'selected' : '' }}>Asset</option>
                                            <option value="liability" {{ old('type') == 'liability' ? 'selected' : '' }}>Liability</option>
                                            <option value="equity" {{ old('type') == 'equity' ? 'selected' : '' }}>Equity</option>
                                            <option value="income" {{ old('type') == 'income' ? 'selected' : '' }}>Income</option>
                                            <option value="expense" {{ old('type') == 'expense' ? 'selected' : '' }}>Expense</option>
                                        </select>
                                    </div>
                                </div>

                                <div class="form-group row">
                                    <label class="col-lg-4 col-form-label font-weight-semibold">Opening Balance</label>
                                    <div class="col-lg-8">
                                        <input name="opening_balance" value="{{ old('opening_balance', 0) }}" type="number" step="0.01" class="form-control" placeholder="E.g., 1000.00">
                                    </div>
                                </div>

                                <div class="form-group row">
                                    <label class="col-lg-4 col-form-label font-weight-semibold">Status</label>
                                    <div class="col-lg-8">
                                        <select name="status" class="form-control select">
                                            <option value="active" {{ old('status') == 'active' ? 'selected' : '' }}>Active</option>
                                            <option value="inactive" {{ old('status') == 'inactive' ? 'selected' : '' }}>Inactive</option>
                                        </select>
                                    </div>
                                </div>

                                <div class="text-right">
                                    <button type="submit" class="btn btn-primary">Save Account <i class="icon-paperplane ml-2"></i></button>
                                </div>

                            </div>
                        </div>
                    </form>
                </div>

            </div>
        </div>
    </div>

@endsection

