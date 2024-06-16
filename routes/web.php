<?php

use App\Http\Controllers\Admin\ArtistController;
use App\Http\Controllers\Admin\DashboardController;
use App\Http\Controllers\Admin\LyricController;
use Illuminate\Support\Facades\Route;


Route::domain('admin.'.env('APP_URL'))->group(function (){

    Route::get('/', [DashboardController::class,'index']);
//  Artist Route...
    Route::get('/artists',[ArtistController::class,'index']);
    Route::get('/artists/create',[ArtistController::class,'create']);
    Route::post('/artists',[ArtistController::class,'store']);

    Route::get('/artist/edit/{id}',[ArtistController::class,'edit']);

    Route::put('/artist/update/{id}',[ArtistController::class,'update']);
    Route::delete('/artist/{artist}',[ArtistController::class,'destroy']);




    Route::get('/albums',[ArtistController::class,'index']);
    Route::get('/lyrics',[LyricController::class,'index'])->name('lyrics.index');
});



Route::get('/',function (){
    return view('index');
});
