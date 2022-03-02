<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Str;

class Rubric extends Model
{
    protected $fillable = ['name'];

    public function bbs()
    {
        return $this->hasMany(Bb::class);
    }

    public function rubrics()
    {
        return $this->hasMany(self::class, 'parent_id');
    }

    public function parent()
    {
        return $this->belongsTo(self::class, 'parent_id');
    }

    public function getNameAttribute($value)
    {
        return Str::ucfirst($value);
    }

    public function setNameAttribute($value)
    {
        $this->attributes['name'] = Str::lower($value);
    }

}
