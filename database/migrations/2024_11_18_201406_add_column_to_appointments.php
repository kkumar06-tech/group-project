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
        Schema::table('appointments', function (Blueprint $table) {
            $table->unsignedBigInteger('regusers_id');  
            $table->foreign('regusers_id')->references('id')->on('regusers')->onDelete('cascade');
            $table->unsignedBigInteger('nutritionists_id');  
            $table->foreign('nutritionists_id')->references('id')->on('nutritionists')->onDelete('cascade');  
        $table->date('date');
        $table->time('time');
        $table->enum('status', ['Pending', 'Confirmed', 'Canceled'])->default('Pending');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('appointments', function (Blueprint $table) {
            $table->dropForeign(['regusers_id']);
            $table->dropForeign(['nutritionists_id']);

            $table->dropColumn(['regusers_id','nutritionists_id','date','time','status']);
        });
    }
};
