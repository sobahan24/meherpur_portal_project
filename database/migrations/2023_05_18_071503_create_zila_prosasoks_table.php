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
        Schema::create('zila_prosasoks', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->string('padobi');
            $table->string('image');
            $table->string('mobile');
            $table->string('phone');
            $table->string('email');
            $table->string('faxOffice');
            $table->string('faxHome');
            $table->string('batch');
            $table->string('kormokal');
            $table->longText('barta');
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
        Schema::dropIfExists('zila_prosasoks');
    }
};
