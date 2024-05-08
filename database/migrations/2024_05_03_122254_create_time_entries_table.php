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
        Schema::create('time_entries', function (Blueprint $table) {
            $table->id();
            $table->unsignedInteger('task');
            $table->string('description')->default('');
            $table->unsignedInteger('project');
            $table->unsignedInteger('budget');
            $table->date('date');
            $table->unsignedInteger('time_spent')->default(5);
            $table->tinyInteger('chargeable')->default(1);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('time_entries');
    }
};
