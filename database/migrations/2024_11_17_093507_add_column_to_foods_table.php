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
        Schema::table('foods', function (Blueprint $table) {
            $table->unsignedBigInteger('food_id')->unique();
            $table->string('food_name');
            
            $table->string('calories_per_100g');
            $table->string('protein_per_100g');
            $table->string('carbs_per_100g');
            $table->string('fats_per_100g');
  
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('foods', function (Blueprint $table) {
            $table->dropColumn(['food_id','food_name','calories_per_100g','protein_per_100g','carbs_per_100g','fats_per_100g']);

        });
    }
};
