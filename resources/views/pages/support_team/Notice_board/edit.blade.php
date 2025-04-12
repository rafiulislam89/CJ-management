@extends('layouts.master')
@section('page_title', 'Edit Notice')
@section('content')

    <div class="card">
        <div class="card-header header-elements-inline">
            <h6 class="card-title">Edit Notice</h6>
            {!! Qs::getPanelOptions() !!}
        </div>

        <div class="card-body">
            <form method="post" action="{{ route('notice_board.update', $notice->id) }}">
                @csrf
                @method('PUT')

                <div class="form-group row">
                    <label class="col-lg-3 col-form-label font-weight-semibold">
                        Title <span class="text-danger">*</span>
                    </label>
                    <div class="col-lg-9">
                        <input name="title" value="{{ old('title', $notice->title) }}" required type="text" class="form-control" placeholder="Title of Notice">
                    </div>
                </div>

                <div class="form-group row">
                    <label class="col-lg-3 col-form-label font-weight-semibold">
                        Description
                    </label>
                    <div class="col-lg-9">
                        <textarea name="description" class="form-control" placeholder="Description of Notice">{{ old('description', $notice->description) }}</textarea>
                    </div>
                </div>

                <div class="form-group row">
                    <label class="col-lg-3 col-form-label font-weight-semibold">
                        Start Date <span class="text-danger">*</span>
                    </label>
                    <div class="col-lg-9">
                        <input name="start_date" value="{{ old('start_date', $notice->start_date) }}" required type="date" class="form-control">
                    </div>
                </div>

                <div class="form-group row">
                    <label class="col-lg-3 col-form-label font-weight-semibold">
                        End Date <span class="text-danger">*</span>
                    </label>
                    <div class="col-lg-9">
                        <input name="end_date" value="{{ old('end_date', $notice->end_date) }}" required type="date" class="form-control">
                    </div>
                </div>

                <div class="form-group row">
                    <label class="col-lg-3 col-form-label font-weight-semibold">
                        Priority <span class="text-danger">*</span>
                    </label>
                    <div class="col-lg-9">
                        <select required data-placeholder="Select Priority" class="form-control select" name="priority" id="priority">
                            <option {{ old('priority', $notice->priority) == 'important' ? 'selected' : '' }} value="important">Important</option>
                            <option {{ old('priority', $notice->priority) == 'normal' ? 'selected' : '' }} value="normal">Normal</option>
                        </select>
                    </div>
                </div>

                <div class="form-group row">
                    <label class="col-lg-3 col-form-label font-weight-semibold">
                        Status
                    </label>
                    <div class="col-lg-9">
                        <select data-placeholder="Select Status" class="form-control select" name="status" id="status">
                            <option {{ old('status', $notice->status) == 'active' ? 'selected' : '' }} value="active">Active</option>
                            <option {{ old('status', $notice->status) == 'inactive' ? 'selected' : '' }} value="inactive">Inactive</option>
                        </select>
                    </div>
                </div>

                <div class="text-right">
                    <button type="submit"  class="btn btn-primary">Update Notice <i class="icon-paperplane ml-2"></i></button>
                </div>
            </form>
        </div>
    </div>

@endsection
