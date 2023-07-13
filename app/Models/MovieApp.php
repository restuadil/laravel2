<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class MovieApp extends Model
{
    use HasFactory;
    public function genres()
    {
        return $this->belongsTo(Genre::class, 'genre_nama');
    }

    public function movies()
    {
        return $this->belongsTo(Movie::class, 'movie_judul');
    }
}
