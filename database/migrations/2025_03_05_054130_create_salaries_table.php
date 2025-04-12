<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateSalariesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('salaries', function (Blueprint $table) {
            $table->id();
            $table->integer('user_id');
            $table->integer('receiver');
            $table->string('purpose')->default('salary');
            $table->bigInteger('amount')->default(0);
            $table->string('month');
            $table->string('year');
            $table->string('date');
            $table->enum('type',['yearly', 'monthly'])->default('monthly');
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
        Schema::dropIfExists('salaries');
    }
}
