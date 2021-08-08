<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Mahasiswa extends Model
{
    protected $fillable = ['nama','npm','jk','tempat_lahir','tanggal_lahir'];
}
