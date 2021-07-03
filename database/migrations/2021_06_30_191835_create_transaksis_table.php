<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTransaksisTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('transaksi', function (Blueprint $table) {
            $table->id();
            $table->string ('email', 30);
            $table->string ('barang_id');
            $table->integer ('jumlah');
            $table->string ('namadosen', 30);
            $table->string ('ruangkuliah', 50);
            $table->string ('matakuliah', 30);
            $table->dateTime ('waktupinjam');
            $table->dateTime ('waktukembali');
            $table->string ('keterangan', 10);
            $table->string ('statuspengembalian', 20);
            $table->string ('petugas', 30);
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
        Schema::dropIfExists('transaksi');
    }
}
