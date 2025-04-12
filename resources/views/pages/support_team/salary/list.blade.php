@extends('layouts.master')
@section('page_title', 'Salary Management')
@section('content')
    <div class="card">
        <div class="card-header header-elements-inline">
            <h6 class="card-title">Salary Records</h6>
            {!! Qs::getPanelOptions() !!}
        </div>

        <div class="card-body">
            <ul class="nav nav-tabs nav-tabs-highlight">
                <li class="nav-item"><a href="#all-salaries" class="nav-link active" data-toggle="tab">Manage Salaries</a></li>
                <li class="nav-item"><a href="{{ route('salaries.create') }}" class="nav-link"><i class="icon-plus2"></i> Create Salary</a></li>
            </ul>

            <div class="tab-content">
                <div class="tab-pane fade show active" id="all-salaries">
                    <table class="table datatable-button-html5-columns">
                        <thead>
                        <tr>
                            <th>S/N</th>
{{--                            <th>User ID</th>--}}
                            <th>Receiver</th>
                            <th>Amount</th>
                            <th>Date</th>
                            <th>Type</th>
                            <th>Action</th>
                        </tr>
                        </thead>
                        <tbody>
                        @forelse($salaries as $salary)
                            <tr>
                                <td>{{ $loop->iteration }}</td>
{{--                                <td>{{ $salary->user ? $salary->user->name : 'N/A' }}</td>--}}
                                <td>{{ $salary->receiverUser ? $salary->receiverUser->name : 'N/A' }}</td>
                                <td>{{ number_format($salary->amount, 2) }}</td>
                                <td>{{ \Carbon\Carbon::parse($salary->date)->format('d M Y') }}</td> <!-- Display the formatted date -->
                                <td>{{ ucfirst($salary->type) }}</td>
                                <td class="text-center">
                                    <div class="list-icons">
                                        <div class="dropdown">
                                            <a href="#" class="list-icons-item" data-toggle="dropdown">
                                                <i class="icon-menu9"></i>
                                            </a>
                                            <div class="dropdown-menu dropdown-menu-left">
                                                <a href="{{ route('salaries.show', $salary->id) }}" class="dropdown-item"><i class="icon-eye"></i> View</a>
                                                <a href="{{ route('salaries.edit', $salary->id) }}" class="dropdown-item"><i class="icon-pencil"></i> Edit</a>
                                                @if(Qs::userIsSuperAdmin())
                                                    <a id="{{ $salary->id }}" onclick="confirmDelete(this.id)" href="#" class="dropdown-item"><i class="icon-trash"></i> Delete</a>
                                                    <form method="post" id="item-delete-{{ $salary->id }}" action="{{ route('salaries.destroy', $salary->id) }}" class="hidden">@csrf @method('delete')</form>
                                                @endif
                                            </div>
                                        </div>
                                    </div>
                                </td>
                            </tr>
                        @empty
                            <tr><td colspan="7">No salary records found.</td></tr>
                        @endforelse
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
@endsection
