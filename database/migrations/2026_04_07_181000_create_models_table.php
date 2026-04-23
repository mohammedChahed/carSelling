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
        Schema::create('models', function (Blueprint $table) {
            $table->id();
            $table->foreignId('maker_id')->constrained('makers')->onDelete('cascade');
            $table->string('name', 255);
        });
        Schema::create('cities', function (Blueprint $table) {
            $table->id();
            $table->string('name', 255);
            $table->foreignId('state_id')->constrained('states')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('models');
    }
};
