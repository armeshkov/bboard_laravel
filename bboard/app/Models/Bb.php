<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Bb extends Model
{
    protected $fillable = ['title', 'content', 'price', 'rubric_id'];

    public function user() {
        return $this->belongsTo(User::class);
    }

    public function rubric() {
        return $this->belongsTo(Rubric::class);
    }
}
