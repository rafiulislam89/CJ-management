<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateAssetAllocationsTable extends Migration
{
    public function up()
    {
        // Only for dev: optionally drop if exists
        if (Schema::hasTable('asset_allocations')) {
            Schema::drop('asset_allocations');
        }

        Schema::create('asset_allocations', function (Blueprint $table) {
            $table->id();

            // Foreign keys
            $table->unsignedBigInteger('client_id');
            $table->unsignedBigInteger('assets_id'); // renamed from assets_id for Laravel standard

            // Allocation fields
            $table->date('allocation_date');
            $table->date('expiry_date')->nullable();
            $table->enum('status', ['active', 'pending', 'expired'])->default('active');

            $table->timestamps();

            // Foreign key constraints
            $table->foreign('client_id')->references('id')->on('clients')->onDelete('cascade');
            $table->foreign('assets_id')->references('id')->on('assets')->onDelete('cascade');
        });
    }

    public function down()
    {
        Schema::dropIfExists('asset_allocations');
    }
}
