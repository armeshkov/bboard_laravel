<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Rubric extends Model
{
    protected $fillable = ['name'];

    public function bbs() {
        return $this->hasMany(Bb::class);
    }
}
