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
        Schema::create('rental_cars', function (Blueprint $table) {
            $table->id();
            $table->string('no_sim');
            $table->string('no_plat');
            $table->dateTime('tgl_rental', precision: 0);
            $table->dateTime('tgl_return', precision: 0);
            $table->bigInteger('total_tarif_rental');
        });

        Schema::table('rental_cars', function (Blueprint $table) {
            $table->foreign('no_sim')->references('no_sim')->on('users')->onUpdate('cascade')->onDelete('cascade');
            $table->foreign('no_plat')->references('no_plat')->on('cars')->onUpdate('cascade')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {

        Schema::table('rental_cars', function (Blueprint $table) {
            $table->dropForeign(['no_sim', 'no_plat']);
        });

        Schema::dropIfExists('rental_cars');
    }
};
