<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\softDeletes;

class Movie extends Model
{
    use SoftDeletes;
    
    protected $fillable = ['status','name','rating','description','image'];

    public function getAll()
    {
        return self::all();
    }

    public function artists()
    {
        return $this->belongsToMany(Artist::class, 'movie_artist', 'movie_id');
    }

    public function scopeRatingOverFive($query)
    {
        return $query->where('rating', '>', 5);
    }

    public function scopeVisible($query)
    {
        return $query->where('status', '=', 1);
    }

}
