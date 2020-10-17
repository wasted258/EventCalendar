<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePouzivatelUdalostTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('pouzivatel_udalost', function (Blueprint $table) {

            $table->unsignedBigInteger('pouzivatelia_id');
            $table->foreign('pouzivatelia_id')->references('id_pouzivatelia')->on('pouzivatelia');

            $table->unsignedBigInteger('udalost_id');
            $table->foreign('udalost_id')->references('id_udalost')->on('udalost');

            $table->boolean('organizator');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('pouzivatel_udalost');
    }
}
