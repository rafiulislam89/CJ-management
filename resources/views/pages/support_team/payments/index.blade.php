@extends('layouts.master')
@section('page_title', 'Manage Payments')
@section('content')

    <div class="card">
        <div class="card-header header-elements-inline">
            <h6 class="card-title">Manage Payments</h6>
            {!! Qs::getPanelOptions() !!}
        </div>

        <div class="card-body">
            <div class="tab-content">
                <div class="tab-pane fade show active" id="all-payments">
                    <table class="table datatable-button-html5-columns">
                        <thead>
                        <tr>
                            <th>#</th>
                            <th>Title</th>
                            <th>Amount</th>
                            <th>Ref_No</th>
                            <th>Class</th>
                            <th>Method</th>
                            <th>Info</th>
                            <th>Action</th>
                        </tr>
                        </thead>
                        <tbody>
{{--                        @foreach($payments as $p)--}}
                            <tr>
                                <td>{{ $p->id }}</td>
                                <td>{{ $p->title }}</td>
                                <td>{{ $p->amount }}</td>
                                <td>{{ $p->ref_no }}</td>
                                <td>{{ $p->my_class_id ? $p->my_class->name : '' }}</td>
                                <td>{{ ucwords($p->method) }}</td>
                                <td>{{ $p->description }}</td>
                                <td class="text-center">
                                    <div class="list-icons">
                                        <div class="dropdown">
                                            <a href="#" class="list-icons-item" data-toggle="dropdown">
                                                <i class="icon-menu9"></i>
                                            </a>

                                            <div class="dropdown-menu dropdown-menu-left">
                                                {{--Edit--}}
                                                <a href="{{ route('payments.edit', $p->id) }}" class="dropdown-item"><i class="icon-pencil"></i> Edit</a>
                                                {{--Delete--}}
                                                <a id="{{ $p->id }}" onclick="confirmDelete(this.id)" href="#" class="dropdown-item"><i class="icon-trash"></i> Delete</a>
                                                <form method="post" id="item-delete-{{ $p->id }}" action="{{ route('payments.destroy', $p->id) }}" class="hidden">@csrf @method('delete')</form>

                                            </div>
                                        </div>
                                    </div>
                                </td>
                            </tr>
{{--                        @endforeach--}}
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>

    {{--Payments List Ends--}}

@endsection
