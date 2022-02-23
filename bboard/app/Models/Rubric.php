<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Rubric extends Model
{
    protected $fillable = ['name'];

    public function bbs() {
        return $this->belongsToMany(Bb::class);
    }
}
