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
        Schema::create('food_foodlog', function (Blueprint $table) {
            $table->unsignedBigInteger('food_id');
            $table->unsignedBigInteger('foodlog_id');

            $table->foreign('food_id')->references('id')->on('foods')->onDelete('cascade');
            $table->foreign('foodlog_id')->references('id')->on('foodlogs')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {

        Schema::table('food_foodlog', function (Blueprint $table) {
            $table->dropForeign(['food_id']); // Drop the foreign key for food_id
            $table->dropForeign(['foodlog_id']); // Drop the foreign key for foodlog_id
        });

        Schema::dropIfExists('food_foodlog');
    }
};
