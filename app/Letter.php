<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Letter extends Model
{
    protected $fillable = [
        "nomor",
        "pegawai_ditugaskan",
        "tujuan",
        "kendaraan",
        "lama",
        "tanggal_berangkat",
        "tanggal_kembali",
        "pembebanan_biaya",
        "nama_pemberi_tugas",
        "golongan_pemberi_tugas",
        "nip_pemberi_tugas",
        "tanggal_surat"
    ];
}
