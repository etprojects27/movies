<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\softDeletes;

class Artist extends Model
{
    use SoftDeletes;

    protected $fillable = ['name','title'];

    public function movies()
    {
        return $this->belongsToMany(Movie::class);
    }

    public function scopeStar($query)
    {
        return $query->where('title', '=', 'star');
    }

    public function scopeWriter($query)
    {
        return $query->where('title', '=', 'writer');
    }

    public function scopeDirector($query)
    {
        return $query->where('title', '=', 'director');
    }
}
