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
            $table->unsignedBigInteger('user_id');
          $table->foreign('user_id')->references('id')->on('useralls')->onDelete('cascade');
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
            $table->dropColumn(['user_id','quantity','date']);
        });
    }
};
