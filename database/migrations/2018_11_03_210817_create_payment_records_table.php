<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePaymentRecordsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('payment_records', function (Blueprint $table) {
            $table->increments('id');
            $table->unsignedInteger('payment_id')->default(1);
            $table->unsignedInteger('student_id');
            $table->string('ref_no', 100)->unique()->nullable();
            $table->integer('amt_paid')->default(0);
            $table->integer('due')->default(0);
            $table->integer('balance')->default(0);
            $table->tinyInteger('paid')->default(0);
            $table->integer('admission_fee')->default(0);
            $table->integer('tution_fee')->default(0);
            $table->integer('other_expense')->default(0);
            $table->integer('khoraki')->default(0);
            $table->integer('discount')->default(0);
            $table->string('department')->nullable();
            $table->tinyInteger('is_residential')->default(1);
            $table->string('month')->nullable();
            $table->string('year')->nullable();
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
        Schema::dropIfExists('payment_records');
    }
}
