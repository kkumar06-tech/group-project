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
        Schema::table('useralls', function (Blueprint $table) {
            $table->string('name');
            $table->string('email')->unique();
            $table->string('password');
            $table->enum('role', ['Nutritionist', 'User', 'Guest']);



        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('useralls', function (Blueprint $table) {
            $table->dropColumn(['name','email','password','role']);
        });
    }
};
