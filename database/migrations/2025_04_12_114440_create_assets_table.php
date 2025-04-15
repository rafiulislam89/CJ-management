<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateAssetsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('assets', function (Blueprint $table) {
            $table->id();
            $table->string('category'); // Asset category
            $table->string('model'); // Model of the asset
            $table->string('brand')->nullable();
            $table->string('serial_number')->unique();
            $table->string('image');
            $table->date('start_date');
            $table->date('end_date')->nullable();
            $table->enum('status', ['active', 'in_use', 'under_maintenance', 'retired'])->default('active'); // Status of the asset
//            $table->foreignId('user_id')->constrained()->onDelete('cascade'); // Foreign key for the user (optional, if asset is linked to a user)
            $table->timestamps(); // Created at & Updated at
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('assets');
    }
}
