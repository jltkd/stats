<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Pitch extends Model
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
