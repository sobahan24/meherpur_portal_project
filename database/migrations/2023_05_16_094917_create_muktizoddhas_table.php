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
        Schema::create('muktizoddhas', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->string('fatherName');
            $table->string('motherName');
            $table->string('gram');
            $table->string('upozila');
            $table->string('zila')->default('Meherpur');
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
        Schema::dropIfExists('muktizoddhas');
    }
};
