<?php

use App\Models\TypeOfVehicle;
use App\Models\Vehicle;
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
        Schema::create('vehicles', function (Blueprint $table) {
            $table->id();
            $table->integer('capacity_max');
            $table->string('fuel_type',50);
            $table->integer('manufacture_year');
            $table->json('special_equipment');
            $table->foreignIdFor(Vehicle::class)->constrained();
             $table->foreignIdFor(TypeOfVehicle::class)->constrained();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('vehicles');
    }
};
