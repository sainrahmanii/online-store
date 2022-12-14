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
        Schema::create('products', function (Blueprint $table) {
            $table->id();
            // $table->integer('user_id');
            $table->foreignId('user_id')->constrained();
            // $table->integer('kategori_id');
            $table->foreignId('kategori_id')->constrained();
            $table->string('nama_product');
            $table->integer('harga');
            $table->text('deskripsi');
            // $table->integer('gambar_id');
            $table->foreignId('gambar_id')->nullable()->constrained();
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
        Schema::dropIfExists('products');
    }
};
