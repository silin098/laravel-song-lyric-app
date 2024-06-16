<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Str;

class Artist extends Model
{
    use HasFactory;

    protected $fillable = [
        'name','slug','bio','image'
    ];

    public function albums(){
        return $this->hasMany(Album::class);
    }


    public function songs(){
        return $this->hasManyThrough(Song::class, Album::class);
    }

    public function genres(){
        return $this->belongsToMany(Genre::class,'artist_genre')->withTimestamps();

    }

    public function setNameAttribute($value){
        $this->attributes['name'] = $value;
        $this->attributes['slug'] = Str::slug($value);
    }


}
