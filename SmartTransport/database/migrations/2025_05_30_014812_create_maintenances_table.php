<?php

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
        Schema::create('maintenances', function (Blueprint $table) 
        {
   
  
            $table->id();
            $table->json('date');
            $table->text('description');
            $table->string('workshop',75);
            $table->json('cost');
            $table->foreignIdFor(Vehicle::class)->constrained();
            $table->string('type',75);

            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('maintenances');
    }
};
