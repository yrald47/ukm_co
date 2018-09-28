<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class ProdukUkm extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('produk_ukm', function (Blueprint $table) {
            $table->increments('id');
            $table->string('nama');
            $table->unsignedInteger('id_ukm');
            $table->unsignedInteger('id_produk');
            $table->integer('harga');
            $table->integer('diskon')->nullable();
            $table->integer('stok')->nullable();
            $table->integer('like_count')->nullable();
            $table->string('desc')->nullable();
            
            $table->foreign('id_ukm')->references('id')->on('ukm')->onUpdate('cascade')->onDelete('cascade');
            $table->foreign('id_produk')->references('id')->on('produk')->onUpdate('cascade')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('produk_ukm');
    }
}
