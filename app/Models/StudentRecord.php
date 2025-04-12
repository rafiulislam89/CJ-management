<?php

namespace App\Models;

use App\User;
use Eloquent;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class StudentRecord extends Eloquent
{
    use HasFactory;

    protected $fillable = [
        'student_name',
        'email',
        'gender',
        'phone' ,
        'phone2' ,
        'adm_no' ,
        'my_class_id' ,
        'section_id' ,
        'admission_date' ,
        'age' ,
        'dob' ,
        'father_name' ,
        'mother_name' ,
        'permanent_address' ,
        'village' ,
        'post_office' ,
        'police_station' ,
        'district' ,
        'guardian_name' ,
        'guardian_relation',
        'guardian_occupation' ,
        'guardian_mobile',
        'previous_institution_name',
        'previous_institution_address' ,
        'prev_class_admitted',
        'examiner' ,
        'is_residential',
        'department' ,
        'photo' ,
        'user_id' ,
        'session' ,
        'discount',
        'house' ,
        'prev_exam_result' ,
        'prev_arabic_result' ,
        'prev_academic_result' ,
    ];

    public function user()
    {
        return $this->belongsTo(User::class);
    }

    public function my_parent()
    {
        return $this->belongsTo(User::class);
    }

    public function my_class()
    {
        return $this->belongsTo(MyClass::class);
    }

    public function section()
    {
        return $this->belongsTo(Section::class);
    }

    public function dorm()
    {
        return $this->belongsTo(Dorm::class);
    }
    public function payment_records()
    {
        return $this->belongsTo(PaymentRecord::class, 'id','student_id');
    }

}
