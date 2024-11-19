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
        Schema::table('recipes', function (Blueprint $table) {
            $table->string('name'); 
            $table->text('description')->nullable();
            $table->json('ingredients'); 
            $table->text('instructions'); 
            $table->decimal('calories', 5, 2); 
            $table->decimal('protein', 5, 2)->nullable(); 
            $table->decimal('carbs', 5, 2)->nullable(); 
            $table->decimal('fats', 5, 2)->nullable(); 
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('recipes', function (Blueprint $table) {
            $table->dropColumn(['name','description','ingredients','instructions','calories','protein','carbs','fats']);
        });
    }
};
