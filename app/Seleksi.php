<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Seleksi extends Model
{
  protected $fillable = [
    'nama', 'gerakan', 'vokal',
    'sikap', 'konsen', 'keterangan'
  ];
}
