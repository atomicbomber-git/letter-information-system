<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Participant extends Model
{
    protected $fillable = ["nama", "nip", "golongan", "jabatan", "letter_id"];
}
