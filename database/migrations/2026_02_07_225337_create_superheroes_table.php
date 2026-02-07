<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('superheroes', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->string('real_name')->nullable();
            $table->enum('gender', ['Male', 'Female', 'Other']);
            $table->foreignId('universe_id')->constrained();
            $table->timestamps();
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('superheroes');
    }
};