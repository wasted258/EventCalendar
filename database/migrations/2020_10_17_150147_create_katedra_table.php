<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateKatedraTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('katedra', function (Blueprint $table) {
            $table->bigIncrements('id_katedra');
            $table->string('nazov_katedra');

            $table->unsignedBigInteger('fakulta_id');
            $table->foreign('fakulta_id')->references('id_fakulta')->on('fakulta');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('katedra');
    }
}
