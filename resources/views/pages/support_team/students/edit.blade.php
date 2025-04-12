@extends('layouts.master')
@section('page_title', 'Edit Student Record')
@section('content')
    <div class="card">
        <div class="card-header bg-white header-elements-inline">
            <h6 class="card-title">Edit Student Record</h6>
            {!! Qs::getPanelOptions() !!}
        </div>

        <form method="post" enctype="multipart/form-data" class="wizard-form steps-validation" action="{{ route('students.update', Qs::hash($sr->id)) }}" >
            @csrf
            @method('PUT')
            <!-- PERSONAL INFORMATION -->
            <h6>Personal Information</h6>
            <fieldset>
                <div class="row">
                    <div class="col-md-6">
                        <div class="form-group">
                            <label>Student Full Name: <span class="text-danger">*</span></label>
                            <input value="{{ old('student_name', $sr->student_name) }}" required type="text" name="student_name" placeholder="Full Name" class="form-control">
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="form-group">
                            <label>Email Address:</label>
                            <input value="{{ old('email', $sr->user->email) }}" type="email" name="email" placeholder="Email Address" class="form-control">
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-3">
                        <div class="form-group">
                            <label>Gender: <span class="text-danger">*</span></label>
                            <select class="select form-control" name="gender" required data-placeholder="Choose...">
                                <option value=""></option>
                                <option {{ (old('gender', $sr->user->gender) == 'Male') ? 'selected' : '' }} value="Male">Male</option>
                                <option {{ (old('gender', $sr->user->gender) == 'Female') ? 'selected' : '' }} value="Female">Female</option>
                            </select>
                        </div>
                    </div>
                    <div class="col-md-3">
                        <div class="form-group">
                            <label>Phone:</label>
                            <input value="{{ old('phone', $sr->user->phone) }}" type="text" name="phone" placeholder="Phone" class="form-control">
                        </div>
                    </div>
                    <div class="col-md-3">
                        <div class="form-group">
                            <label>Alternate Phone:</label>
                            <input value="{{ old('phone2', $sr->user->phone2) }}" type="text" name="phone2" placeholder="Alternate Phone" class="form-control">
                        </div>
                    </div>
                    <div class="col-md-3">
                        <div class="form-group">
                            <label>Date of Birth:</label>
                            <input name="dob" value="{{ old('dob', $sr->dob) }}" type="date" class="form-control" placeholder="Select Date...">
                        </div>
                    </div>
                </div>
                <div class="row">
                    <!-- Parent details -->
                    <div class="col-md-4">
                        <div class="form-group">
                            <label>Father's Name:</label>
                            <input type="text" name="father_name" value="{{ old('father_name', $sr->father_name) }}" placeholder="Father's Name" class="form-control">
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="form-group">
                            <label>Mother's Name:</label>
                            <input type="text" name="mother_name" value="{{ old('mother_name', $sr->mother_name) }}" placeholder="Mother's Name" class="form-control">
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="form-group">
                            <label>Guardian Name (if applicable):</label>
                            <input type="text" name="guardian_name" value="{{ old('guardian_name', $sr->guardian_name) }}" placeholder="Guardian Name" class="form-control">
                        </div>
                    </div>
                </div>
                <div class="row">
                    <!-- Address details -->
                    <div class="col-md-6">
                        <div class="form-group">
                            <label>Permanent Address:</label>
                            <input type="text" name="permanent_address" value="{{ old('permanent_address', $sr->permanent_address) }}" placeholder="Permanent Address" class="form-control">
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="form-group">
                            <label>Village:</label>
                            <input type="text" name="village" value="{{ old('village', $sr->village) }}" placeholder="Village" class="form-control">
                        </div>
                    </div>
                </div>
                <div class="row">
                    <!-- Location details -->
                    <div class="col-md-4">
                        <div class="form-group">
                            <label>Post Office:</label>
                            <input type="text" name="post_office" value="{{ old('post_office', $sr->post_office) }}" placeholder="Post Office" class="form-control">
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="form-group">
                            <label>Police Station:</label>
                            <input type="text" name="police_station" value="{{ old('police_station', $sr->police_station) }}" placeholder="Police Station" class="form-control">
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="form-group">
                            <label>District:</label>
                            <input type="text" name="district" value="{{ old('district', $sr->district) }}" placeholder="District" class="form-control">
                        </div>
                    </div>
                </div>
                <div class="row">
                    <!-- Guardian info -->
                    <div class="col-md-6">
                        <div class="form-group">
                            <label>Guardian Relation:</label>
                            <input type="text" name="guardian_relation" value="{{ old('guardian_relation', $sr->guardian_relation) }}" placeholder="Guardian Relation" class="form-control">
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="form-group">
                            <label>Guardian Occupation:</label>
                            <input type="text" name="guardian_occupation" value="{{ old('guardian_occupation', $sr->guardian_occupation) }}" placeholder="Guardian Occupation" class="form-control">
                        </div>
                    </div>
                </div>
                <div class="row">
                    <!-- Additional guardian info and photo -->
                    <div class="col-md-6">
                        <div class="form-group">
                            <label>Guardian Mobile:</label>
                            <input type="text" name="guardian_mobile" value="{{ old('guardian_mobile', $sr->guardian_mobile) }}" placeholder="Guardian Mobile" class="form-control">
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="form-group">
                            <label>Upload Passport Photo:</label>
                            <input type="file" name="photo" accept="image/*" class="form-input-styled" data-fouc>
                            <span class="form-text text-muted">Accepted Images: jpeg, png. Max file size 2Mb</span>
                            @if($sr->photo)
                                <img src="{{ asset($sr->photo) }}" alt="Photo" style="width: 100px; margin-top: 10px;">
                            @endif
                        </div>
                    </div>
                </div>
            </fieldset>
            <!-- STUDENT ACADEMIC DATA -->
            <!-- STUDENT ACADEMIC DATA -->
            <h6>Student Academic Data</h6>
            <fieldset>
                <div class="row">
                    <div class="col-md-3">
                        <div class="form-group">
                            <label for="my_class_id">Class: <span class="text-danger">*</span></label>
                            <select onchange="getClassSections(this.value)" required name="my_class_id" id="my_class_id" class="select-search form-control" data-placeholder="Choose...">
                                <option value=""></option>
                                @foreach($my_classes as $c)
                                    <option {{ (old('my_class_id', $sr->my_class_id) == $c->id) ? 'selected' : '' }} value="{{ $c->id }}">{{ $c->name }}</option>
                                @endforeach
                            </select>
                        </div>
                    </div>

                    <div class="col-md-4">
                        <div class="form-group">
                            <label>Department:</label>
                            <select name="department" class="select-search form-control" data-placeholder="Choose Department">
                                <option value=""></option>
                                <option {{ (old('department', $sr->department) == 'noorani') ? 'selected' : '' }} value="noorani">নূরাণী বিভাগ</option>
                                <option {{ (old('department', $sr->department) == 'najera') ? 'selected' : '' }} value="najera">নাজেরা বিভাগ</option>
                                <option {{ (old('department', $sr->department) == 'hifz') ? 'selected' : '' }} value="hifz">হিফয বিভাগ</option>
                                <option {{ (old('department', $sr->department) == 'sunani') ? 'selected' : '' }} value="sunani">শুনানি বিভাগ</option>
                            </select>
                        </div>
                    </div>

                    <div class="col-md-3">
                        <div class="form-group">
                            <label>Admission No.:</label>
                            <input type="text" name="adm_no" value="{{ old('adm_no', $sr->adm_no) }}" class="form-control" placeholder="Enter Admission No." required>
                        </div>
                    </div>

            <div class="col-md-3">
                        <div class="form-group">
{{--                            <label for="year_admitted">Admission Year: <span class="text-danger">*</span></label>--}}
{{--                            <select required name="year_admitted" id="year_admitted" class="select-search form-control" data-placeholder="Choose...">--}}
{{--                                <option value=""></option>--}}
{{--                                @for($y = date('Y', strtotime('-10 years')); $y <= date('Y'); $y++)--}}
{{--                                    <option {{ (old('year_admitted', $sr->year_admitted) == $y) ? 'selected' : '' }} value="{{ $y }}">{{ $y }}</option>--}}
{{--                                @endfor--}}
{{--                            </select>--}}
                        </div>
                    </div>
                </div>
                <div class="row">

                    <div class="col-md-3">
                        <div class="form-group">
                            <label>Discount:</label>
                            <input type="number" name="discount" placeholder="Discount" class="form-control" value="{{ old('discount', $sr->discount) }}">
                        </div>
                    </div>
                    <div class="col-md-3">
                        <div class="form-group">
                            <label>Age:</label>
                            <input type="number" name="age" placeholder="Age" class="form-control" value="{{ old('age', $sr->age) }}">
                        </div>
                    </div>
                </div>
                <div class="row">
                    <!-- Admission Date, Previous Institution Name, Previous Institution Address -->
                    <div class="col-md-4">
                        <div class="form-group">
                            <label>Admission Date:</label>
                            <input type="text" name="admission_date" value="{{ old('admission_date', $sr->admission_date) }}" class="form-control date-pick" placeholder="Select Date...">
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="form-group">
                            <label>Previous Institution Name:</label>
                            <input type="text" name="previous_institution_name" value="{{ old('previous_institution_name', $sr->previous_institution_name) }}" placeholder="Previous Institution Name" class="form-control">
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="form-group">
                            <label>Previous Institution Address:</label>
                            <input type="text" name="previous_institution_address" value="{{ old('previous_institution_address', $sr->previous_institution_address) }}" placeholder="Previous Institution Address" class="form-control">
                        </div>
                    </div>
                </div>
                <div class="row">
                    <!-- Previous Class Admitted, Examiner, Exam Results -->
                    <div class="col-md-4">
                        <div class="form-group">
                            <label>Previous Class Admitted:</label>
                            <input type="text" name="prev_class_admitted" placeholder="Previous Class/Section" class="form-control" value="{{ old('prev_class_admitted', $sr->prev_class_admitted) }}">
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="form-group">
                            <label>Examiner:</label>
                            <input type="text" name="examiner" placeholder="Examiner Name" class="form-control" value="{{ old('examiner', $sr->examiner) }}">
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="form-group">
                            <label>Previous Exam Result:</label>
                            <input type="text" name="prev_exam_result" placeholder="Previous Exam Result" class="form-control" value="{{ old('prev_exam_result', $sr->prev_exam_result) }}">
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="form-group">
                            <label>Previous Arabic Result:</label>
                            <input type="text" name="prev_arabic_result" placeholder="Previous Arabic Result" class="form-control" value="{{ old('prev_arabic_result', $sr->prev_arabic_result) }}">
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="form-group">
                            <label>Previous Academic Result:</label>
                            <input type="text" name="prev_academic_result" placeholder="Previous Academic Result" class="form-control" value="{{ old('prev_academic_result', $sr->prev_academic_result) }}">
                        </div>
                    </div>
                </div>
                <div class="row">
                    <!-- Department and Residential Status -->
                    <div class="col-md-4">
                        <div class="form-group">
                            <label>Department:</label>
                            <select name="department" class="select-search form-control" data-placeholder="Choose Department">
                                <option value=""></option>
                                <option {{ (old('department', $sr->department) == 'noorani') ? 'selected' : '' }} value="noorani">নূরাণী বিভাগ</option>
                                <option {{ (old('department', $sr->department) == 'najera') ? 'selected' : '' }} value="najera">নাজেরা বিভাগ</option>
                                <option {{ (old('department', $sr->department) == 'hifz') ? 'selected' : '' }} value="hifz">হিফয বিভাগ</option>
                                <option {{ (old('department', $sr->department) == 'sunani') ? 'selected' : '' }} value="sunani">শুনানি বিভাগ</option>
                            </select>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="form-group">
                            <label>Residential Status:</label>
                            <select name="is_residential" class="select-search form-control" data-placeholder="Select">
                                <option value="0" {{ (old('is_residential', $sr->is_residential) == 0) ? 'selected' : '' }}>অনাবাসিক</option>
                                <option value="1" {{ (old('is_residential', $sr->is_residential) == 1) ? 'selected' : '' }}>আবাসিক</option>
                            </select>
                        </div>
                    </div>
                </div>
            </fieldset>
        </form>
    </div>
@endsection
