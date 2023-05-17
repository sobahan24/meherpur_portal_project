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
        Schema::create('hat_bazars', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->string('ayoton');
            $table->string('chandinaViti');
            $table->string('ijara');
            $table->string('address');
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
        Schema::dropIfExists('hat_bazars');
    }
};
