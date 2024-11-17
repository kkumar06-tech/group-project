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
        Schema::table('foodlogs', function (Blueprint $table) {
            $table->unsignedBigInteger('user_id')->unique();
            $table->unsignedBigInteger('food_id')->unique();
          $table->foreign('user_id')->references('id')->on('useralls')->onDelete('cascade');
          $table->foreign('food_id')->references('id')->on('foods')->onDelete('cascade');
          $table->decimal('quantity',5,2); 
          $table->date('date')->default(DB::raw('CURRENT_DATE'));
           
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('foodlogs', function (Blueprint $table) {
            $table->dropForeign(['user_id']);
            $table->dropForeign(['food_id']);
            $table->dropColumn(['user_id','food_id','quantity','date']);
        });
    }
};
