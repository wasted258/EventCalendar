<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateUdalostTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('udalost', function (Blueprint $table) {
            $table->bigIncrements('id_udalost');
            $table->string('nazov_udalost');
            $table->longText('popis');
            $table->dateTime('zaciatok');
            $table->dateTime('koniec');
            $table->integer('pocet_ludi');

            $table->unsignedBigInteger('katedra_id');
            $table->foreign('katedra_id')->references('id_katedra')->on('katedra');

        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('udalost');
    }
}
