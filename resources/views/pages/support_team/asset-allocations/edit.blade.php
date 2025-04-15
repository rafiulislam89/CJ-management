@extends('layouts.master')
@section('page_title', 'Edit Asset Allocation')
@section('content')

    <div class="card">
        <div class="card-header header-elements-inline">
            <h6 class="card-title">Edit Asset Allocation</h6>
            {!! Qs::getPanelOptions() !!}
        </div>

        <div class="card-body">
            <form method="post" action="{{ route('asset-allocations.update', $allocation->id) }}">
                @csrf
                @method('PUT')

                <div class="form-group row">
                    <label class="col-lg-3 col-form-label font-weight-semibold">
                        Company <span class="text-danger">*</span>
                    </label>
                    <div class="col-lg-9">
                        <select name="company_id" required class="form-control select">
                            <option value="">Select Company</option>
                            @foreach($clients as $client)
                                @if($client->status == 'active')
                                    <option value="{{ $client->id }}" {{ $client->id == $allocation->company_id ? 'selected' : '' }}>
                                        {{ $client->company_name }}
                                    </option>
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
                                <option value="{{ $inv->id }}" {{ $inv->id == $allocation->inventory_id ? 'selected' : '' }}>
                                    {{ $inv->category }}
                                </option>
                            @endforeach
                        </select>
                    </div>
                </div>

                <div class="form-group row">
                    <label class="col-lg-3 col-form-label font-weight-semibold">
                        Allocation Date <span class="text-danger">*</span>
                    </label>
                    <div class="col-lg-9">
                        <input type="date" name="allocation_date" class="form-control" value="{{ $allocation->allocation_date }}" required>
                    </div>
                </div>

                <div class="form-group row">
                    <label class="col-lg-3 col-form-label font-weight-semibold">
                        Expiry Date
                    </label>
                    <div class="col-lg-9">
                        <input type="date" name="expiry_date" class="form-control" value="{{ $allocation->expiry_date }}">
                    </div>
                </div>

                <div class="form-group row">
                    <label class="col-lg-3 col-form-label font-weight-semibold">
                        Status
                    </label>
                    <div class="col-lg-9">
                        <select name="status" class="form-control select">
                            <option value="active" {{ $allocation->status == 'active' ? 'selected' : '' }}>Active</option>
                            <option value="pending" {{ $allocation->status == 'pending' ? 'selected' : '' }}>Pending</option>
                            <option value="expired" {{ $allocation->status == 'expired' ? 'selected' : '' }}>Expired</option>
                        </select>
                    </div>
                </div>

                <div class="text-right">
                    <a href="{{ route('asset-allocations.index') }}" class="btn btn-light">Back</a>
                    <button type="submit" class="btn btn-primary">Update Allocation <i class="icon-check ml-2"></i></button>
                </div>
            </form>
        </div>
    </div>

@endsection

