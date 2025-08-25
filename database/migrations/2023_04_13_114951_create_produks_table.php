<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateProduksTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('produks', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->bigInteger('category_id')->unsigned();
            $table->foreign("category_id")->references('id')->on('categories');
            $table->text('gambar')->nullable();
            $table->string('nama_produk');
            $table->integer('harga');
            $table->integer('stok');
            $table->string('type')->nullable();
            $table->enum('alergi', ['tidak_ada','ayam'])->nullable();
            $table->string('breed')->nullable();
            $table->enum('aktivitas', ['jarang', 'aktif','hiperaktif'])->nullable();
            $table->string('usia')->nullable();
            $table->text('deskripsi');
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
        Schema::dropIfExists('produks');
    }
}
