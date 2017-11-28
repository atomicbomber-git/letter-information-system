<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateLettersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('letters', function (Blueprint $table) {
            $table->increments('id');
            $table->timestamps();

            $table->string("nomor")->nullable();
            $table->string("pegawai_ditugaskan")->nullable();
            $table->string("tujuan")->nullable();
            $table->string("kendaraan")->nullable();
            $table->string("lama")->nullable();
            $table->string("tanggal_berangkat")->nullable();
            $table->string("tanggal_kembali")->nullable();
            $table->string("pembebanan_biaya")->nullable();
            $table->string("nama_pemberi_tugas")->nullable();
            $table->string("golongan_pemberi_tugas")->nullable();
            $table->string("nip_pemberi_tugas")->nullable();
            $table->date("tanggal_surat")->nullable();

        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('letters');
    }
}
