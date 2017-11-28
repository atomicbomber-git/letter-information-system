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

            $table->string("nomor");
            $table->string("pegawai_ditugaskan");
            $table->string("tujuan");
            $table->string("lama");
            $table->string("tanggal_berangkat");
            $table->string("tanggal_kembali");
            $table->string("pembebanan_biaya");

            $table->string("nama_pemberi_tugas");
            $table->string("golongan_pemberi_tugas");
            $table->string("nip_pemberi_tugas");
            $table->date("tanggal_surat`");
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
