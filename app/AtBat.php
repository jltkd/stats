<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class AtBat extends Model
{
    protected $fillable = [
      'child_id',
      'date',
      'inning',
      'balls',
      'strikes',
      'outcome',
      'notes'
    ];

    public function child()
    {
        return $this->belongsTo(Child::class);
    }
}
