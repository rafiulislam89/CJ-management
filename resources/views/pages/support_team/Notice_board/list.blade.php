@extends('layouts.master')
@section('page_title', 'Notice Board')
@section('content')

    <div class="card">
        <div class="card-header header-elements-inline">
            <h6 class="card-title">Notice Board</h6>
            {!! Qs::getPanelOptions() !!}
        </div>

        <div class="card-body">
            <ul class="nav nav-tabs nav-tabs-highlight">
                <li class="nav-item"><a href="#all-notices" class="nav-link active" data-toggle="tab">Manage Notices</a></li>
                <li class="nav-item"><a href="#add-notices" class="nav-link" data-toggle="tab"><i class="icon-plus2"></i> Create Notice</a></li>
            </ul>
            <div class="tab-content">
                <div class="tab-pane fade show active" id="all-notices">
                    <table class="table datatable-button-html5-columns">
                        <thead>
                        <tr>
                            <th>S/N</th>
                            <th>Title</th>
                            <th>Description</th>
                            <th>Start Date</th>
                            <th>End Date</th>
                            <th>Priority</th>
                            <th>Status</th>
                            <th>Action</th>
                        </tr>
                        </thead>
                        <tbody>
                        @foreach($notices as $val)
                            <tr>
                                <td>{{ $loop->iteration }}</td>
                                <td>{{ $val->title }}</td>
                                <td>{{ $val->description }}</td>
                                <td>{{ $val->start_date }}</td>
                                <td>{{ $val->end_date }}</td>
                                <td>{{ $val->priority }}</td>
                                <td>{{ $val->status }}</td>
                                <td class="text-center">
                                    <div class="list-icons">
                                        <div class="dropdown">
                                            <a href="#" class="list-icons-item" data-toggle="dropdown">
                                                <i class="icon-menu9"></i>
                                            </a>

                                            <div class="dropdown-menu dropdown-menu-left">
                                                {{--Edit--}}
                                                @if(Qs::userIsTeamSA())
                                                    <a href="{{ route('notice_board.edit', $val->id) }}" class="dropdown-item">
                                                        <i class="icon-pencil"></i> Edit
                                                    </a>
                                                @endif
                                                {{--Delete--}}
                                                @if(Qs::userIsSuperAdmin())
                                                    <a id="delete-{{ $val->id }}" onclick="confirmDelete('{{ $val->id }}')" href="#" class="dropdown-item">
                                                        <i class="icon-trash"></i> Delete
                                                    </a>
                                                    <form method="post" id="item-delete-{{ $val->id }}" action="{{ route('notice_board.destroy', $val->id) }}" class="hidden">
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

                <div class="tab-pane fade" id="add-notices">
                    <div class="row">
                        <div class="col-md-12">
                            <div class="alert alert-info border-0 alert-dismissible">
                                <button type="button" class="close" data-dismiss="alert"><span>&times;</span></button>

                                <span>When a class is created, a Section will be automatically created for the class, you can edit it or add more sections to the class at <a target="_blank" href="{{ route('sections.index') }}">Manage Sections</a></span>
                            </div>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-md-6">
                            <form class="" method="post" action="{{ route('notice_board.store') }}">
                                @csrf
                                <div class="form-group row">
                                    <label class="col-lg-3 col-form-label font-weight-semibold">
                                        Title <span class="text-danger">*</span>
                                    </label>
                                    <div class="col-lg-9">
                                        <input name="title" value="{{ old('title') }}" required type="text" class="form-control" placeholder="title of Class">
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label class="col-lg-3 col-form-label font-weight-semibold">
                                        Description
                                    </label>
                                    <div class="col-lg-9">
                                        <textarea name="description" class="form-control" placeholder="description of Class">{{ old('description') }}</textarea>
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label class="col-lg-3 col-form-label font-weight-semibold">
                                        Start date <span class="text-danger">*</span>
                                    </label>
                                    <div class="col-lg-9">
                                        <input name="start_date" value="{{ old('start_date') }}" required type="date" class="form-control">
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label class="col-lg-3 col-form-label font-weight-semibold">
                                        End date <span class="text-danger">*</span>
                                    </label>
                                    <div class="col-lg-9">
                                        <input name="end_date" value="{{ old('end_date') }}" required type="date" class="form-control">
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label class="col-lg-3 col-form-label font-weight-semibold">
                                        Priority <span class="text-danger">*</span>
                                    </label>
                                    <div class="col-lg-9">
                                        <select required data-placeholder="Select Priority" class="form-control select" name="priority" id="priority">
                                            <option {{ old('priority') == 'important' ? 'selected' : '' }} value="important">Important</option>
                                            <option {{ old('priority') == 'normal' ? 'selected' : '' }} value="normal">Normal</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label class="col-lg-3 col-form-label font-weight-semibold">
                                        Status
                                    </label>
                                    <div class="col-lg-9">
                                        <select data-placeholder="Select status" class="form-control select" name="status" id="status">
                                            <option {{ old('status') == 'active' ? 'selected' : '' }} value="active">active</option>
                                            <option {{ old('status') == 'inactive' ? 'selected' : '' }} value="inactive">inactive</option>
                                        </select>
                                    </div>
                                </div>


                                <div class="text-right">
                                    <button id="ajax-btn" type="submit" class="btn btn-primary">Submit form <i class="icon-paperplane ml-2"></i></button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

@endsection
