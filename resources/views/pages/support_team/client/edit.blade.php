@extends('layouts.master')
@section('page_title', 'Edit Client')
@section('content')

    <div class="card">
        <div class="card-header header-elements-inline">
            <h6 class="card-title">Edit Client - {{ $client->company_name }}</h6>
            {!! Qs::getPanelOptions() !!}
        </div>

        <div class="card-body">
            <form method="post" action="{{ route('client.update', $client->id) }}">
                @csrf
                @method('PUT')

                <div class="form-group row">
                    <label class="col-lg-3 col-form-label font-weight-semibold">
                        Company Name <span class="text-danger">*</span>
                    </label>
                    <div class="col-lg-9">
                        <input name="company_name" value="{{ old('company_name', $client->company_name) }}" required type="text" class="form-control" placeholder="Client Company Name">
                    </div>
                </div>

                <div class="form-group row">
                    <label class="col-lg-3 col-form-label font-weight-semibold">
                        Description
                    </label>
                    <div class="col-lg-9">
                        <textarea name="description" class="form-control" placeholder="Project Summary or Notes">{{ old('description', $client->description) }}</textarea>
                    </div>
                </div>

                <div class="form-group row">
                    <label class="col-lg-3 col-form-label font-weight-semibold">
                        Joining Date <span class="text-danger">*</span>
                    </label>
                    <div class="col-lg-9">
                        <input name="joining_date" value="{{ old('joining_date', $client->joining_date) }}" required type="date" class="form-control">
                    </div>
                </div>

                <div class="form-group row">
                    <label class="col-lg-3 col-form-label font-weight-semibold">
                        End Date
                    </label>
                    <div class="col-lg-9">
                        <input name="end_date" value="{{ old('end_date', $client->end_date) }}" type="date" class="form-control">
                    </div>
                </div>

                <div class="form-group row">
                    <label class="col-lg-3 col-form-label font-weight-semibold">
                        Status
                    </label>
                    <div class="col-lg-9">
                        <select class="form-control select" name="status">
                            <option value="active" {{ $client->status == 'active' ? 'selected' : '' }}>Active</option>
                            <option value="inactive" {{ $client->status == 'inactive' ? 'selected' : '' }}>Inactive</option>
                        </select>
                    </div>
                </div>

                <div class="text-right">
                    <a href="{{ route('client.index') }}" class="btn btn-light">Back</a>
                    <button type="submit" class="btn btn-primary">Update Client <i class="icon-paperplane ml-2"></i></button>
                </div>
            </form>
        </div>
    </div>

@endsection
