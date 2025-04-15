@extends('layouts.master')
@section('page_title', 'Asset Allocation Management')
@section('content')

    <div class="card">
        <div class="card-header header-elements-inline">
            <h6 class="card-title">Asset Allocation Management</h6>
            {!! Qs::getPanelOptions() !!}
        </div>

        <div class="card-body">
            <ul class="nav nav-tabs nav-tabs-highlight">
                <li class="nav-item"><a href="#all-allocations" class="nav-link active" data-toggle="tab">Manage Allocations</a></li>
                <li class="nav-item"><a href="#add-allocation" class="nav-link" data-toggle="tab"><i class="icon-plus2"></i> Add Allocation</a></li>
            </ul>

            <div class="tab-content">
                <!-- Allocation List -->
                <div class="tab-pane fade show active" id="all-allocations">
                    <table class="table datatable-button-html5-columns">
                        <thead>
                        <tr>
                            <th>S/N</th>
                            <th>Company</th>
                            <th>Inventory</th>
                            <th>Allocation Date</th>
                            <th>Expiry Date</th>
                            <th>Status</th>
                            <th>Action</th>
                        </tr>
                        </thead>
                        <tbody>
                        @foreach($allocations as $allocation)
                            <tr>
                                <td>{{ $loop->iteration }}</td>
                                <td>{{ $allocation->company->company_name }}</td>
                                <td>{{ $allocation->inventory->category }}</td>
                                <td>{{ $allocation->allocation_date }}</td>
                                <td>{{ $allocation->expiry_date }}</td>
                                <td>{{ ucfirst($allocation->status) }}</td>
                                <td class="text-center">
                                    <div class="list-icons">
                                        <div class="dropdown">
                                            <a href="#" class="list-icons-item" data-toggle="dropdown">
                                                <i class="icon-menu9"></i>
                                            </a>
                                            <div class="dropdown-menu dropdown-menu-left">
                                                <a href="{{ route('asset-allocations.edit', $allocation->id) }}" class="dropdown-item">
                                                    <i class="icon-pencil"></i> Edit
                                                </a>
                                                <a onclick="confirmDelete('{{ $allocation->id }}')" href="#" class="dropdown-item">
                                                    <i class="icon-trash"></i> Delete
                                                </a>
                                                <form method="post" id="item-delete-{{ $allocation->id }}" action="{{ route('asset-allocations.destroy', $allocation->id) }}" class="hidden">
                                                    @csrf
                                                    @method('DELETE')
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

                <!-- Allocation Form -->
                <div class="tab-pane fade" id="add-allocation">
                    <div class="row">
                        <div class="col-md-6">
                            <form method="post" action="{{ route('asset-allocations.store') }}">
                                @csrf

                                <div class="form-group row">
                                    <label class="col-lg-3 col-form-label font-weight-semibold">
                                        Company <span class="text-danger">*</span>
                                    </label>
                                    <div class="col-lg-9">
                                        <select name="company_id" required class="form-control select">
                                            <option value="">Select Company</option>
                                            @foreach($clients as $client)
                                                @if($client->status == 'active')
                                                    <option value="{{ $client->id }}">{{ $client->company_name}}</option>
                                                @endif
                                            @endforeach
                                        </select>
                                    </div>
                                </div>

                                <div class="form-group row">
                                    <label class="col-lg-3 col-form-label font-weight-semibold">
                                        Inventory <span class="text-danger">*</span>
                                    </label>
                                    <div class="col-lg-9">
                                        <select name="inventory_id" required class="form-control select">
                                            <option value="">Select Inventory</option>
                                            @foreach($assets as $inv)
                                                <option value="{{ $inv->id }}">{{ $inv->category }}</option>
                                            @endforeach
                                        </select>
                                    </div>
                                </div>

                                <div class="form-group row">
                                    <label class="col-lg-3 col-form-label font-weight-semibold">
                                        Allocation Date <span class="text-danger">*</span>
                                    </label>
                                    <div class="col-lg-9">
                                        <input type="date" name="allocation_date" class="form-control" required>
                                    </div>
                                </div>

                                <div class="form-group row">
                                    <label class="col-lg-3 col-form-label font-weight-semibold">
                                        Expiry Date
                                    </label>
                                    <div class="col-lg-9">
                                        <input type="date" name="expiry_date" class="form-control">
                                    </div>
                                </div>

                                <div class="form-group row">
                                    <label class="col-lg-3 col-form-label font-weight-semibold">
                                        Status
                                    </label>
                                    <div class="col-lg-9">
                                        <select name="status" class="form-control select">
                                            <option value="active">Active</option>
                                            <option value="pending">Pending</option>
                                            <option value="expired">Expired</option>
                                        </select>
                                    </div>
                                </div>

                                <div class="text-right">
                                    <button type="submit" class="btn btn-primary">Submit Allocation <i class="icon-paperplane ml-2"></i></button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

@endsection
