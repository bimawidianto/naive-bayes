<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Datatest extends Model
{
  protected $fillable = [
    'dataset_id', 'prediksi'
  ];

  public function dataset()
  {
    return $this->belongsTo(Dataset::class);
  }
}
