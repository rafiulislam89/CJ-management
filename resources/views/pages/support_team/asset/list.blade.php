@extends('layouts.master')
@section('page_title', 'asset Management')
@section('content')

    <div class="card">
        <div class="card-header header-elements-inline">
            <h6 class="card-title">Asset Management</h6>
            {!! Qs::getPanelOptions() !!}
        </div>

        <div class="card-body">
            <ul class="nav nav-tabs nav-tabs-highlight">
                <li class="nav-item"><a href="#all-assets" class="nav-link active" data-toggle="tab">Manage Assets</a></li>
                <li class="nav-item"><a href="#add-assets" class="nav-link" data-toggle="tab"><i class="icon-plus2"></i> Add Asset</a></li>
            </ul>
            <div class="tab-content">
                <div class="tab-pane fade show active" id="all-assets">
                    <table class="table datatable-button-html5-columns">
                        <thead>
                        <tr>
                            <th>S/N</th>
                            <th>Category</th>
                            <th>Model</th>
                            <th>Brand</th>
                            <th>Serial Number</th>
                            <th>Image</th>
                            <th>Start Date</th>
{{--                            <th>End Date</th>--}}
                            <th>Status</th>
                            <th>Action</th>
                        </tr>
                        </thead>
                        <tbody>
                        @foreach($assets as $val)
                            <tr>
                                <td>{{ $loop->iteration }}</td>
                                <td>{{ $val->category }}</td>
                                <td>{{ $val->model }}</td>
                                <td>{{ $val->brand }}</td>
                                <td>{{ $val->serial_number }}</td>
                                <td>
                                    @if($val->image)
                                        <img src="{{ asset('uploads/assets/' . $val->image) }}" alt="Asset Image" width="60">
                                    @else
                                        N/A
                                    @endif
                                </td>
                                <td>{{ $val->start_date }}</td>
{{--                                <td>{{ $val->end_date }}</td>--}}
                                <td>{{ $val->status }}</td>
                                <td class="text-center">
                                    <div class="list-icons">
                                        <div class="dropdown">
                                            <a href="#" class="list-icons-item" data-toggle="dropdown">
                                                <i class="icon-menu9"></i>
                                            </a>
                                            <div class="dropdown-menu dropdown-menu-left">
                                                @if(Qs::userIsTeamSA())
                                                    <a href="{{ route('assets.edit', $val->id) }}" class="dropdown-item">
                                                        <i class="icon-pencil"></i> Edit
                                                    </a>
                                                @endif
                                                @if(Qs::userIsSuperAdmin())
                                                    <a onclick="confirmDelete('{{ $val->id }}')" href="#" class="dropdown-item">
                                                        <i class="icon-trash"></i> Delete
                                                    </a>
                                                    <form method="post" id="item-delete-{{ $val->id }}" action="{{ route('assets.destroy', $val->id) }}" class="hidden">
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

                <div class="tab-pane fade" id="add-assets">
                    <div class="row">
                        <div class="col-md-6">
                            <form method="post" action="{{ route('assets.store') }}" enctype="multipart/form-data">
                                @csrf
                                <div class="form-group row">
                                    <label class="col-lg-3 col-form-label font-weight-semibold">
                                        Category <span class="text-danger">*</span>
                                    </label>
                                    <div class="col-lg-9">
                                        <input name="category" value="{{ old('category') }}" required type="text" class="form-control" placeholder="e.g. Laptop, Printer">
                                    </div>
                                </div>

                                <div class="form-group row">
                                    <label class="col-lg-3 col-form-label font-weight-semibold">
                                        Model
                                    </label>
                                    <div class="col-lg-9">
                                        <input name="model" value="{{ old('model') }}" type="text" class="form-control" placeholder="e.g. Inspiron 15-3000">
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label class="col-lg-3 col-form-label font-weight-semibold">
                                        Brand
                                    </label>
                                    <div class="col-lg-9">
                                        <input name="brand" value="{{ old('brand') }}" type="text" class="form-control" placeholder="e.g. Dell, HP, Lenovo">
                                    </div>
                                </div>

                                <div class="form-group row">
                                    <label class="col-lg-3 col-form-label font-weight-semibold">
                                        Serial Number <span class="text-danger">*</span>
                                    </label>
{{--                                    <div class="col-lg-9">--}}
{{--                                        <input name="serial_number" value="{{ old('serial_number') }}" required type="text" class="form-control" placeholder="Unique Identifier">--}}
{{--                                    </div>--}}
                                    <div class="col-lg-9">
                                        <input name="serial_number" value="{{ $serialNumber }}" readonly type="text" class="form-control" placeholder="Unique Identifier">
                                    </div>
                                </div>

                                <div class="form-group row">
                                    <label class="col-lg-3 col-form-label font-weight-semibold">
                                        Image
                                    </label>
                                    <div class="col-lg-9">
                                        <input name="image" type="file" class="form-control">
                                    </div>
                                </div>

                                <div class="form-group row">
                                    <label class="col-lg-3 col-form-label font-weight-semibold">
                                        Start Date <span class="text-danger">*</span>
                                    </label>
                                    <div class="col-lg-9">
                                        <input name="start_date" value="{{ old('start_date') }}" required type="date" class="form-control">
                                    </div>
                                </div>

{{--                                <div class="form-group row">--}}
{{--                                    <label class="col-lg-3 col-form-label font-weight-semibold">--}}
{{--                                        End Date <span class="text-danger">*</span>--}}
{{--                                    </label>--}}
{{--                                    <div class="col-lg-9">--}}
{{--                                        <input name="end_date" value="{{ old('end_date') }}" required type="date" class="form-control">--}}
{{--                                    </div>--}}
{{--                                </div>--}}

                                <div class="form-group row">
                                    <label class="col-lg-3 col-form-label font-weight-semibold">
                                        Status
                                    </label>
                                    <div class="col-lg-9">
                                        <select class="form-control select" name="status" id="status">
                                            <option {{ old('status') == 'active' ? 'selected' : '' }} value="active">Active</option>
                                            <option {{ old('status') == 'in_use' ? 'selected' : '' }} value="in_use">In Use</option>
                                            <option {{ old('status') == 'under_maintenance' ? 'selected' : '' }} value="under_maintenance">Under Maintenance</option>
                                            <option {{ old('status') == 'retired' ? 'selected' : '' }} value="retired">Retired</option>
                                        </select>
                                    </div>
                                </div>

                                <div class="text-right">
                                    <button type="submit" class="btn btn-primary">Submit Asset <i class="icon-paperplane ml-2"></i></button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

@endsection

