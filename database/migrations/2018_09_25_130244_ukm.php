<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class Ukm extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('ukm', function (Blueprint $table) {
            $table->increments('id');
            $table->string('nama');
            $table->string('tanggal_berdiri')->nullable();
            $table->string('alamat')->nullable();
            $table->string('profil')->nullable();
            $table->unsignedInteger('id_owner');

            $table->foreign('id_owner')->references('id')->on('owner')->onUpdate('cascade')->onDelete('cascade');
            $table->rememberToken();
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
        Schema::dropIfExists('ukm');
    }
}
