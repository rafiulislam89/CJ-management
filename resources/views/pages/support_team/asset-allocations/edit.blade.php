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

                <!-- COMPANY -->
                <div class="form-group row">
                    <label class="col-lg-3 col-form-label font-weight-semibold">Company <span class="text-danger">*</span></label>
                    <div class="col-lg-9">
                        <select name="company_id" required class="form-control select">
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

                <!-- INVENTORY SELECTION -->
                <div class="form-group">
                    <label class="font-weight-semibold mb-2">Inventory Details <span class="text-danger">*</span></label>
                    <div class="row">

                        <!-- CATEGORY -->
                        <div class="col-md-3 mb-2">
                            <select id="category" class="form-control" required>
                                <option value="">Select Category</option>
                                @foreach($categories as $cat)
                                    <option value="{{ $cat }}" {{ $cat == $allocation->inventory->category ? 'selected' : '' }}>
                                        {{ ucwords($cat) }}
                                    </option>
                                @endforeach
                            </select>
                        </div>

                        <!-- BRAND -->
                        <div class="col-md-3 mb-2">
                            <select id="brand" class="form-control" required>
                                <option value="{{ $allocation->inventory->brand }}" selected>{{ $allocation->inventory->brand }}</option>
                            </select>
                        </div>

                        <!-- MODEL -->
                        <div class="col-md-3 mb-2">
                            <select name="inventory_id" id="model" class="form-control" required>
                                <option value="{{ $allocation->inventory->id }}" selected>{{ $allocation->inventory->model }}</option>
                            </select>
                        </div>

                        <!-- SERIAL NUMBER -->
                        <div class="col-md-3 mb-2">
                            <select id="serial_number" name="serial_number" class="form-control" required>
                                <option value="{{ $allocation->serial_number }}" selected>{{ $allocation->serial_number }}</option>
                            </select>
                        </div>
                    </div>
                </div>

                <!-- ALLOCATION DATE -->
                <div class="form-group row">
                    <label class="col-lg-3 col-form-label font-weight-semibold">Allocation Date <span class="text-danger">*</span></label>
                    <div class="col-lg-9">
                        <input type="date" name="allocation_date" class="form-control" value="{{ $allocation->allocation_date }}" required>
                    </div>
                </div>

                <!-- EXPIRY DATE -->
                <div class="form-group row">
                    <label class="col-lg-3 col-form-label font-weight-semibold">Expiry Date</label>
                    <div class="col-lg-9">
                        <input type="date" name="expiry_date" class="form-control" value="{{ $allocation->expiry_date }}">
                    </div>
                </div>

                <!-- STATUS -->
                <div class="form-group row">
                    <label class="col-lg-3 col-form-label font-weight-semibold">Status</label>
                    <div class="col-lg-9">
                        <select name="status" class="form-control select">
                            <option value="active" {{ $allocation->status == 'active' ? 'selected' : '' }}>Active</option>
                            <option value="pending" {{ $allocation->status == 'pending' ? 'selected' : '' }}>Pending</option>
                            <option value="expired" {{ $allocation->status == 'expired' ? 'selected' : '' }}>Expired</option>
                        </select>
                    </div>
                </div>

                <!-- SUBMIT BUTTON -->
                <div class="text-right">
                    <button type="submit" class="btn btn-primary">
                        Update Allocation <i class="icon-checkmark4 ml-2"></i>
                    </button>
                </div>
            </form>
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
