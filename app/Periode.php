<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Periode extends Model
{
    protected $table = 'periode';
    protected $fillable = ['nama_periode', 'tanggal_mulai', 'tanggal_selesai'];
}
