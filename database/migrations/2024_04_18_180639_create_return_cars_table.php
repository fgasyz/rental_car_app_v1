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
        Schema::create('return_cars', function (Blueprint $table) {
            $table->id();
            $table->string('no_sim');
            $table->string('no_plat');
    });

    Schema::table('return_cars', function (Blueprint $table) {
        $table->foreign('no_sim')->references('no_sim')->on('users')->onUpdate('cascade')->onDelete('cascade');
        $table->foreign('no_plat')->references('no_plat')->on('cars')->onUpdate('cascade')->onDelete('cascade');
    });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('return_cars', function (Blueprint $table) {
            $table->dropForeign(['no_sim', 'no_plat']);
        });

        Schema::dropIfExists('return_cars');
    }
};
