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
        Schema::create('tasks', function (Blueprint $table) {
            $table->id();
            $table->string('name')->default('');
            $table->string('description')->default('');
            $table->unsignedInteger('budget')->default('0');
            $table->unsignedInteger('assignee')->default('0');
            $table->string('status')->default('Open');
            $table->date('start_date')->default(date("Y-m-d H:i:s"));
            $table->date('due_date')->default(date("Y-m-d H:i:s"));
            $table->date('completed_date')->default(date("Y-m-d H:i:s"));
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('tasks');
    }
};
