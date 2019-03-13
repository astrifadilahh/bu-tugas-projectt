<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTransactionTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('transaction', function (Blueprint $table) {
            $table->integer('id');
            $table->integer('id_film');
            $table->string('nama_peminjam');
            $table->string('no_ktp');
            $table->string('foto_ktp');
            $table->string('status');
            $table->double('harga');
            $table->string('tgl_input');
            $table->string('tgl_kembali');
            $table->string('tgl_pinjam');
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
        Schema::dropIfExists('transaction');
    }
}
