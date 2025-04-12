@extends('layouts.master')
@section('page_title', 'Student Information')
@section('content')
    <div class="card">
        <div class="card-header header-elements-inline">
            <h6 class="card-title">Students List</h6>
            {!! Qs::getPanelOptions() !!}
        </div>

        <div class="card-body">
            <div class="tab-content">
                <div class="tab-pane fade show active" id="all-students">
                    <table class="table datatable-button-html5-columns" style="width: 100% !important; table-layout: auto !important;">
                        <thead>
                        <tr>
                            <th>S/N</th>
                            <th>Photo</th>
                            <th>Name</th>
                            <th>Admission_No</th>
                            <th>Section</th>
                            <th>Phone</th>
                            <th>Department</th>
                            <th>Action</th>
                        </tr>
                        </thead>
                        <tbody>
                        @php $sn = 1; @endphp
                        @foreach($students as $s)
                            @if(!$s->user)
                                @continue
                            @endif
                            <tr>
                                <td>{{ $sn++ }}</td>
                                <td>
                                    <img class="rounded-circle" style="height: 40px; width: 40px;"
                                         src="{{ asset($s->user->photo) }}"
                                         alt="photo" onerror="this.onerror=null; this.src='{{ asset('storage/default-user.png') }}';">
                                </td>
                                <td>{{ $s->user->name }}</td>
                                <td>{{ $s->adm_no }}</td>
                                <td>{{ $s->section ? $s->section->name : 'N/A' }}</td>
                                <td>{{ $s->user->phone }}</td>
                                <td>{{ $s->department ?? 'N/A' }}</td>
                                <td class="text-center">
                                    <div class="list-icons">
                                        <div class="dropdown">
                                            <a href="#" class="list-icons-item" data-toggle="dropdown">
                                                <i class="icon-menu9"></i>
                                            </a>
                                            <div class="dropdown-menu dropdown-menu-right">
                                                <a href="{{ route('students.show', Qs::hash($s->id)) }}" class="dropdown-item">
                                                    <i class="icon-eye"></i> View Profile
                                                </a>
                                                @if(Qs::userIsTeamSA())
                                                    <a href="{{ route('students.edit', Qs::hash($s->id)) }}" class="dropdown-item">
                                                        <i class="icon-pencil"></i> Edit
                                                    </a>
                                                @endif
                                                @if(Qs::userIsSuperAdmin())
                                                    <a id="{{ Qs::hash($s->user->id) }}" onclick="confirmDelete(this.id)" href="#" class="dropdown-item">
                                                        <i class="icon-trash"></i> Delete
                                                    </a>
                                                    <form method="post" id="item-delete-{{ Qs::hash($s->user->id) }}" action="{{ route('students.destroy', Qs::hash($s->user->id)) }}" class="hidden">
                                                        @csrf
                                                        @method('delete')
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
            </div>
        </div>
    </div>
@endsection
