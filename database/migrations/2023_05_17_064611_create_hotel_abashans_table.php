<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('hotel_abashans', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->string('ownerName');
            $table->string('address');
            $table->string('mobile');
            $table->string('abashanDharon');
            $table->longText('biboron');
            $table->tinyInteger('status')->default('0');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('hotel_abashans');
    }
};
