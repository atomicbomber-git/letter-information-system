<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Letter extends Model
{
    protected $fillable = [
        "nomor",
        "pejabat_berwenang_pemberi_tugas",
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

    public function participants()
    {
        return $this->hasMany("App\Participant");
    }
}
