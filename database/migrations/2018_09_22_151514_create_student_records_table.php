<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateStudentRecordsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('student_records', function (Blueprint $table) {
            $table->increments('id');
            $table->unsignedInteger('user_id');
            $table->unsignedInteger('my_class_id')->nullable();
            $table->unsignedInteger('section_id')->nullable();
            $table->string('adm_no', 30)->unique()->nullable();
            $table->unsignedInteger('my_parent_id')->nullable();
            $table->string('session');
            $table->string('student_code', 30)->unique()->nullable();
            $table->integer('discount')->nullable()->default(0);
            $table->string('house')->nullable();
            $table->string('age')->nullable();
//            $table->string('year_admitted')->nullable();
            $table->dateTime('admission_date')->nullable();
            $table->tinyInteger('grad')->default(0);
            $table->string('grad_date')->nullable();
            $table->string('student_name');
            $table->string('dob')->nullable()->comment('Date of Birth');
            $table->string('father_name')->nullable();
            $table->string('mother_name')->nullable();
            $table->string('permanent_address')->nullable();
            $table->string('village')->nullable();
            $table->string('post_office')->nullable();
            $table->string('police_station')->nullable();
            $table->string('district')->nullable();
            $table->string('guardian_name')->nullable()->comment('If father is absent');
            $table->string('guardian_relation')->nullable();
            $table->string('guardian_occupation')->nullable();
            $table->string('guardian_mobile')->nullable();
            $table->string('previous_institution_name')->nullable();
            $table->string('previous_institution_address')->nullable();
            $table->string('prev_class_admitted')->nullable()->comment('Which section the student is admitted into');
            $table->string('examiner')->nullable();
            $table->integer('is_residential')->default(0);
            $table->string('prev_exam_result')->nullable();
            $table->string('prev_arabic_result')->nullable();
            $table->string('prev_academic_result')->nullable();
            $table->enum('department', ['noorani', 'najera', 'hifz', 'sunani'])->nullable();
            $table->string('photo')->nullable()->comment('Profile photo path'); // Added photo column
            $table->timestamps();

        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('student_records');
    }
}
