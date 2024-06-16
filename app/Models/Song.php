<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Song extends Model
{
    use HasFactory;

    protected $fillable = [
        'title','album_id',
    ];

    public function album(){
        return $this->belongsTo(Album::class);
    }

    public function artist(){
        return $this->belongsTo(Artist::class);
    }

    public function genres(){
        return $this->belongsToMany(Genre::class, 'song_genre');
    }


}
