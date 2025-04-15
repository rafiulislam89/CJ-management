<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateAccountChartsTable extends Migration
{
    public function up()
    {
        Schema::create('account_charts', function (Blueprint $table) {
            $table->id();
            $table->string('code')->unique(); // 🔢 Account Code
            $table->string('name');           // 🏷 Account Name
            $table->enum('type', ['asset', 'liability', 'equity', 'income', 'expense']); // 📊 Account Type
            $table->decimal('opening_balance', 15, 2)->default(0.00); // 💵 Opening Balance
            $table->enum('status', ['active', 'inactive'])->default('active'); // ✅ Status
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('account_charts');
    }
}