
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
                            <th>Brand</th>
                            <th>Serial Number</th>
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
                                <td>{{ $allocation->inventory->brand }}</td>
                                <td>{{$allocation->inventory->serial_number }}</td>

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

                                <!-- COMPANY -->
                                <div class="form-group row">
                                    <label class="col-lg-3 col-form-label font-weight-semibold">Company <span class="text-danger">*</span></label>
                                    <div class="col-lg-9">
                                        <select name="company_id" required class="form-control select">
                                            <option value="">Select Company</option>
                                            @foreach($clients as $client)
                                                @if($client->status == 'active')
                                                    <option value="{{ $client->id }}">{{ $client->company_name }}</option>
                                                @endif
                                            @endforeach
                                        </select>
                                    </div>
                                </div>

                                <!-- INVENTORY SELECTION -->
                                <div class="form-group">
                                    <label class="font-weight-semibold mb-2">Inventory Details <span class="text-danger">*</span></label>
                                    <div class="row">

                                        <!-- CATEGORY -->
                                        <div class="col-md-3 mb-2">
                                            <select id="category" class="form-control" required>
                                                <option value="">Select Category</option>
                                                @foreach($categories as $cat)
                                                    <option value="{{ $cat }}">{{ ucwords($cat) }}</option>
                                                @endforeach
                                            </select>
                                        </div>

                                        <!-- BRAND -->
                                        <div class="col-md-3 mb-2">
                                            <select id="brand" class="form-control" disabled required>
                                                <option value="">Select Brand</option>
                                            </select>
                                        </div>

                                        <!-- MODEL -->
                                        <div class="col-md-3 mb-2">
                                            <select name="inventory_id" id="model" class="form-control" disabled required>
                                                <option value="">Select Model</option>
                                            </select>
                                        </div>

                                        <!-- SERIAL NUMBER -->
                                        <div class="col-md-3 mb-2">
                                            <select id="serial_number" name="serial_number" class="form-control" disabled required>
                                                <option value="">Select Serial Number</option>
                                            </select>
                                        </div>
                                    </div>
                                </div>

                                <!-- ALLOCATION DATE -->
                                <div class="form-group row">
                                    <label class="col-lg-3 col-form-label font-weight-semibold">Allocation Date <span class="text-danger">*</span></label>
                                    <div class="col-lg-9">
                                        <input type="date" name="allocation_date" class="form-control" required>
                                    </div>
                                </div>

                                <!-- EXPIRY DATE -->
                                <div class="form-group row">
                                    <label class="col-lg-3 col-form-label font-weight-semibold">Expiry Date</label>
                                    <div class="col-lg-9">
                                        <input type="date" name="expiry_date" class="form-control">
                                    </div>
                                </div>

                                <!-- STATUS -->
                                <div class="form-group row">
                                    <label class="col-lg-3 col-form-label font-weight-semibold">Status</label>
                                    <div class="col-lg-9">
                                        <select name="status" class="form-control select">
                                            <option value="active">Active</option>
                                            <option value="pending">Pending</option>
                                            <option value="expired">Expired</option>
                                        </select>
                                    </div>
                                </div>

                                <!-- SUBMIT BUTTON -->
                                <div class="text-right">
                                    <button type="submit" class="btn btn-primary">
                                        Submit Allocation <i class="icon-paperplane ml-2"></i>
                                    </button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>

    <script>
        $(document).ready(function () {
            // When category changes, load brands
            $('#category').on('change', function () {
                let category = $(this).val();
                $('#brand').html('<option value="">Loading...</option>').prop('disabled', true);
                $('#model').html('<option value="">Select Model</option>').prop('disabled', true);
                $('#serial_number').html('<option value="">Select Serial Number</option>').prop('disabled', true);

                if (category) {
                    $.get('{{ route("ajax.getBrands") }}', { category: category }, function (data) {
                        let brandOptions = '<option value="">Select Brand</option>';
                        data.forEach(function (brand) {
                            brandOptions += `<option value="${brand}">${brand}</option>`;
                        });
                        $('#brand').html(brandOptions).prop('disabled', false);
                    });
                }
            });

            // When brand changes, load models
            $('#brand').on('change', function () {
                let category = $('#category').val();
                let brand = $(this).val();

                $('#model').html('<option value="">Loading...</option>').prop('disabled', true);
                $('#serial_number').html('<option value="">Select Serial Number</option>').prop('disabled', true);

                if (category && brand) {
                    $.get('{{ route("ajax.getModels") }}', { category: category, brand: brand }, function (data) {
                        let modelOptions = '<option value="">Select Model</option>';
                        data.forEach(function (item) {
                            // Use item.id as value and store the model name as a data attribute
                            modelOptions += `<option value="${item.id}" data-model="${item.model}">${item.model}</option>`;
                        });
                        $('#model').html(modelOptions).prop('disabled', false);
                    });

                }
            });

            // When model changes, load serial numbers
            $('#model').change(function () {
                const category = $('#category').val();
                const brand = $('#brand').val();
                // Extract the model name from the selected option
                const modelName = $('#model option:selected').data('model');

                $('#serial_number').html('<option value="">Loading...</option>').prop('disabled', true);

                if (category && brand && modelName) {
                    $.get("{{ route('ajax.getSerialNumbers') }}", { category, brand, model: modelName }, function (data) {
                        let options = '<option value="">Select Serial Number</option>';
                        data.forEach(function (item) {
                            options += `<option value="${item.serial_number}">${item.serial_number}</option>`;
                        });
                        $('#serial_number').html(options).prop('disabled', false);
                    });
                }
            });


        });
    </script>
@endsection
