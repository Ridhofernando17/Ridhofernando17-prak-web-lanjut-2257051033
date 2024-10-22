<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        schema::table('user', function (Blueprint $table){
            $table->int('semester')->nullable();
        });
    }
    

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        schema::table('user', function (Blueprint $table){
            $table->dropColumn('semester');
        });
    }
};