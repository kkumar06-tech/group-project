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
        Schema::table('dailycounts', function (Blueprint $table) {
            $table->unsignedBigInteger('user_id');  
            $table->foreign('user_id')->references('id')->on('useralls')->onDelete('cascade');
           
            $table->float('calories', 5, 2)->default(0);  
            $table->float('protein', 5, 2)->default(0);  
            $table->float('carbs', 5, 2)->default(0);  
            $table->float('fats', 5, 2)->default(0);  
            $table->float('water', 5, 2)->default(0); 
          $table->date('date')->default(DB::raw('CURRENT_DATE'));  
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('dailycounts', function (Blueprint $table) {
            $table->dropForeign(['user_id']);
            $table->dropColumn(['user_id','calories','protein','carbs','fats','water','date']);
        });
    }
};
