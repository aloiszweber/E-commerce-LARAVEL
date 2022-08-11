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
        Schema::create('eshops', function (Blueprint $table) {
            $table->id();
            $table->string('path');
            $table->string('name');
            $table->Integer('price');
            $table->string('reference');
            $table->boolean('disponibility');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('eshops');
    }
};
