<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Dataset extends Model
{
  protected $fillable = [
    'nama', 'gerakan', 'vokal',
    'sikap', 'konsen', 'keterangan'
  ];

  public function datatest()
  {
    return $this->hasOne(Datatest::class);
  }
}
