@extends('layouts.master')
@section('page_title', 'Edit Asset')
@section('content')

    <div class="card">
        <div class="card-header header-elements-inline">
            <h6 class="card-title">Edit Asset</h6>
            {!! Qs::getPanelOptions() !!}
        </div>

        <div class="card-body">
            <form method="post" action="{{ route('assets.update', $asset->id) }}" enctype="multipart/form-data">
                @csrf
                @method('PUT')

                <div class="form-group row">
                    <label class="col-lg-3 col-form-label font-weight-semibold">
                        Category <span class="text-danger">*</span>
                    </label>
                    <div class="col-lg-9">
                        <input name="category" value="{{ old('category', $asset->category) }}" required type="text" class="form-control" placeholder="e.g. Laptop, Printer">
                    </div>
                </div>

                <div class="form-group row">
                    <label class="col-lg-3 col-form-label font-weight-semibold">
                        Model
                    </label>
                    <div class="col-lg-9">
                        <input name="model" value="{{ old('model', $asset->model) }}" type="text" class="form-control" placeholder="e.g. Inspiron 15-3000">
                    </div>
                </div>

                <div class="form-group row">
                    <label class="col-lg-3 col-form-label font-weight-semibold">
                        Brand
                    </label>
                    <div class="col-lg-9">
                        <input name="brand" value="{{ old('brand', $asset->brand ?? '') }}" type="text" class="form-control" placeholder="e.g. Dell, HP, Lenovo">
                    </div>
                </div>

                <div class="form-group row">
                    <label class="col-lg-3 col-form-label font-weight-semibold">
                        Serial Number <span class="text-danger">*</span>
                    </label>
{{--                    <div class="col-lg-9">--}}
{{--                        <input name="serial_number" value="{{ old('serial_number', $asset->serial_number) }}" required type="text" class="form-control" placeholder="Unique Identifier">--}}
{{--                    </div>--}}
                    <div class="col-lg-9">
                        <input
                                name="serial_number"
                                value="{{ old('serial_number', isset($asset) ? $asset->serial_number : $serialNumber) }}"
                                readonly
                                required
                                type="text"
                                class="form-control"
                                placeholder="Unique Identifier"
                        >
                    </div>
                </div>

                <div class="form-group row">
                    <label class="col-lg-3 col-form-label font-weight-semibold">
                        Image
                    </label>
                    <div class="col-lg-9">
                        <input name="image" type="file" class="form-control">
                        @if($asset->image)
                            <br>
                            <img src="{{ asset('uploads/assets/' . $asset->image) }}" alt="Asset Image" width="60">
                        @else
                            <p>No image available</p>
                        @endif
                    </div>
                </div>

                <div class="form-group row">
                    <label class="col-lg-3 col-form-label font-weight-semibold">
                        Start Date <span class="text-danger">*</span>
                    </label>
                    <div class="col-lg-9">
                        <input name="start_date" value="{{ old('start_date', $asset->start_date) }}" required type="date" class="form-control">
                    </div>
                </div>

{{--                <div class="form-group row">--}}
{{--                    <label class="col-lg-3 col-form-label font-weight-semibold">--}}
{{--                        End Date <span class="text-danger">*</span>--}}
{{--                    </label>--}}
{{--                    <div class="col-lg-9">--}}
{{--                        <input name="end_date" value="{{ old('end_date', $asset->end_date) }}" required type="date" class="form-control">--}}
{{--                    </div>--}}
{{--                </div>--}}

                <div class="form-group row">
                    <label class="col-lg-3 col-form-label font-weight-semibold">
                        Status
                    </label>
                    <div class="col-lg-9">
                        <select class="form-control select" name="status" id="status">
                            <option {{ old('status', $asset->status) == 'active' ? 'selected' : '' }} value="active">Active</option>
                            <option {{ old('status', $asset->status) == 'in_use' ? 'selected' : '' }} value="in_use">In Use</option>
                            <option {{ old('status', $asset->status) == 'under_maintenance' ? 'selected' : '' }} value="under_maintenance">Under Maintenance</option>
                            <option {{ old('status', $asset->status) == 'retired' ? 'selected' : '' }} value="retired">Retired</option>
                        </select>
                    </div>
                </div>

                <div class="text-right">
                    <button type="submit" class="btn btn-primary">Update Asset <i class="icon-paperplane ml-2"></i></button>
                </div>
            </form>
        </div>
    </div>

@endsection
