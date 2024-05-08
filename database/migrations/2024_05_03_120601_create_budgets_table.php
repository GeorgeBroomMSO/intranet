<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('budgets', function (Blueprint $table) {
            $table->id();
            $table->unsignedInteger('company')->default('0');
            $table->string('service')->default('');
            $table->unsignedInteger('project')->default('0');
            $table->string('name')->default('');
            $table->float('amount')->default('100');
            $table->string('time')->default('10');
            $table->tinyInteger('recurring')->default(0);
            $table->string('recurring_frequency')->default('10');
            $table->date('start_date')->default(date("Y-m-d H:i:s"));
            $table->tinyInteger('active')->default(1);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('budgets');
    }
};
