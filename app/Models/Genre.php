<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Genre extends Model
{
    use HasFactory;

    protected $fillable = ['name',];

//    public function genre(){
//
//        return $this->belongsToMany(Artist::class,'artist_genre');
//    }

}