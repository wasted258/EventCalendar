<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateUsersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('pouzivatelia', function (Blueprint $table) {
            $table->bigIncrements('id_pouzivatelia');
            $table->string('meno');
            $table->string('priezvisko');
            $table->string('email')->unique();
            $table->timestamp('email_verified_at')->nullable();
            $table->string('heslo');
            $table->boolean('admin')->default(false);
            $table->boolean('ucitel')->default(false);

            $table->unsignedBigInteger('katedra_id');
            $table->foreign('katedra_id')->references('id_katedra')->on('katedra');

            $table->rememberToken();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('pouzivatelia');
    }
}
