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
        Schema::create('cars', function (Blueprint $table) {
            $table->id(); // BIGINT UNSIGNED 
            $table->foreignId('maker_id')->constrained('makers');
            $table->foreignId('model_id')->constrained('models');
            $table->integer('year');
            $table->integer('price');
            $table->string('vin', 255)->nullable();
            $table->integer('mileage')->nullable();
            $table->foreignId('car_type_id')->constrained('car_types');
            $table->foreignId('fuel_type_id')->constrained('fuel_types');
            $table->foreignId('user_id')->constrained('users'); // كيتطابق مع الميغراسيون ديال Laravel
            $table->foreignId('city_id')->constrained('cities');
            $table->string('address', 255)->nullable();
            $table->string('phone', 45)->nullable();
            $table->longText('description')->nullable();
            $table->timestamp('published_at')->nullable();
            $table->timestamps(); // created_at & updated_at
            $table->softDeletes(); // deleted_at
        });
        // car_images table
        Schema::create('car_images', function (Blueprint $table) {
            $table->id();
            $table->foreignId('car_id')->constrained('cars')->onDelete('cascade');
            $table->string('image_path', 255);
            $table->integer('position')->default(0);
        });

        // favourite_cars table
        Schema::create('favourite_cars', function (Blueprint $table) {
            $table->id();
            $table->foreignId('car_id')->constrained('cars')->onDelete('cascade');
            $table->foreignId('user_id')->constrained('users')->onDelete('cascade');
        });

        // car_features table
        Schema::create('car_features', function (Blueprint $table) {
            $table->foreignId('car_id')->primary()->constrained('cars')->onDelete('cascade');
            $table->tinyInteger('abs')->default(0);
            $table->tinyInteger('air_conditioning')->default(0);
            $table->tinyInteger('power_windows')->default(0);
            $table->tinyInteger('power_door_locks')->default(0);
            $table->tinyInteger('cruise_control')->default(0);
            $table->tinyInteger('bluetooth_connectivity')->default(0);
            $table->tinyInteger('remote_start')->default(0);
            $table->tinyInteger('gps_navigation')->default(0);
            $table->tinyInteger('heater_seats')->default(0);
            $table->tinyInteger('climate_control')->default(0);
            $table->tinyInteger('rear_parking_sensors')->default(0);
            $table->tinyInteger('leather_seats')->default(0);
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('cars');
    }
};
