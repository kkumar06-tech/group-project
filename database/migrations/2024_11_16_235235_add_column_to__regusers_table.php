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
        Schema::table('regusers', function (Blueprint $table) {
            $table->unsignedBigInteger('user_id')->unique();
          $table->foreign('user_id')->references('id')->on('useralls')->onDelete('cascade');
            $table->string('gender');
            $table->tinyInteger('age')->unsigned();
            $table->decimal('height',5,2);
            $table->decimal('weight', 5, 2);
            $table->string('goal');
            $table->string('exer_type');
          

        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('regusers', function (Blueprint $table) {
            $table->dropForeign(['user_id']);
            $table->dropColumn(['user_id','gender','age','height','weight','goal','exer_type']);
            
        });
    }
};
