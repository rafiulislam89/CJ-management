@extends('layouts.master')
@section('page_title', 'Client Management')
@section('content')

    <div class="card">
        <div class="card-header header-elements-inline">
            <h6 class="card-title">Client Management</h6>
            {!! Qs::getPanelOptions() !!}
        </div>

        <div class="card-body">
            <ul class="nav nav-tabs nav-tabs-highlight">
                <li class="nav-item"><a href="#all-clients" class="nav-link active" data-toggle="tab">Manage Clients</a></li>
                <li class="nav-item"><a href="#add-client" class="nav-link" data-toggle="tab"><i class="icon-plus2"></i> Add Client</a></li>
            </ul>
            <div class="tab-content">
                <div class="tab-pane fade show active" id="all-clients">
                    <table class="table datatable-button-html5-columns">
                        <thead>
                        <tr>
                            <th>S/N</th>
                            <th>Company Name</th>
                            <th>Description</th>
                            <th>Joining Date</th>
                            <th>End Date</th>
                            <th>Status</th>
                            <th>Action</th>
                        </tr>
                        </thead>
                        <tbody>
                        @foreach($clients as $val)
                            <tr>
                                <td>{{ $loop->iteration }}</td>
                                <td>{{ $val->company_name }}</td>
                                <td>{{ $val->description }}</td>
                                <td>{{ $val->joining_date }}</td>
                                <td>{{ $val->end_date }}</td>
                                <td>{{ $val->status }}</td>
                                <td class="text-center">
                                    <div class="list-icons">
                                        <div class="dropdown">
                                            <a href="#" class="list-icons-item" data-toggle="dropdown">
                                                <i class="icon-menu9"></i>
                                            </a>
                                            <div class="dropdown-menu dropdown-menu-left">
                                                @if(Qs::userIsTeamSA())
                                                    <a href="{{ route('client.edit', $val->id) }}" class="dropdown-item">
                                                        <i class="icon-pencil"></i> Edit
                                                    </a>
                                                @endif
                                                @if(Qs::userIsSuperAdmin())
                                                    <a id="delete-{{ $val->id }}" onclick="confirmDelete('{{ $val->id }}')" href="#" class="dropdown-item">
                                                        <i class="icon-trash"></i> Delete
                                                    </a>
                                                    <form method="post" id="item-delete-{{ $val->id }}" action="{{ route('client.destroy', $val->id) }}" class="hidden">
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

                <div class="tab-pane fade" id="add-client">
                    <div class="row">
                        <div class="col-md-6">
                            <form method="post" action="{{ route('client.store') }}">
                                @csrf
                                <div class="form-group row">
                                    <label class="col-lg-3 col-form-label font-weight-semibold">
                                        Company Name <span class="text-danger">*</span>
                                    </label>
                                    <div class="col-lg-9">
                                        <input name="company_name" value="{{ old('company_name') }}" required type="text" class="form-control" placeholder="Client Company Name">
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label class="col-lg-3 col-form-label font-weight-semibold">
                                        Description
                                    </label>
                                    <div class="col-lg-9">
                                        <textarea name="description" class="form-control" placeholder="Project Summary or Notes">{{ old('description') }}</textarea>
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label class="col-lg-3 col-form-label font-weight-semibold">
                                        Joining Date <span class="text-danger">*</span>
                                    </label>
                                    <div class="col-lg-9">
                                        <input name="joining_date" value="{{ old('joining_date') }}" required type="date" class="form-control">
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label class="col-lg-3 col-form-label font-weight-semibold">
                                        End Date
                                    </label>
                                    <div class="col-lg-9">
                                        <input name="end_date" value="{{ old('end_date') }}" type="date" class="form-control">
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label class="col-lg-3 col-form-label font-weight-semibold">
                                        Status
                                    </label>
                                    <div class="col-lg-9">
                                        <select class="form-control select" name="status" id="status">
                                            <option {{ old('status') == 'active' ? 'selected' : '' }} value="active">Active</option>
                                            <option {{ old('status') == 'inactive' ? 'selected' : '' }} value="inactive">Inactive</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="text-right">
                                    <button type="submit" class="btn btn-primary">Submit form <i class="icon-paperplane ml-2"></i></button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

@endsection