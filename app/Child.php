<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Child extends Model
{
    protected $fillable = [
        'first_name',
        'last_name',
    ];

    public function atbats()
    {
        return $this->hasMany(AtBat::class);
    }

    public function pitches()
    {
        return $this->hasMany(Pitch::class);
    }
}
