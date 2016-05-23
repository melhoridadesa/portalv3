<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class IdosoTB extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('idoso', function (Blueprint $table) {
            $table->increments('id');
            $table->string('nome');
            $table->integer('idade');
            $table->string('endereco');
            $table->string('telefone');
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
        Schema::drop('idoso');
    }
}
