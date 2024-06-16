<?php

use App\Http\Controllers\Admin\ArtistController;
use App\Http\Controllers\Admin\DashboardController;
use App\Http\Controllers\Admin\LyricController;
use Illuminate\Support\Facades\Route;
use \App\Http\Controllers\Admin\GenreController;


Route::domain('admin.'.env('APP_URL'))->group(function (){

    Route::get('/', [DashboardController::class,'index']);
//  Artist Route...
    Route::get('/artists',[ArtistController::class,'index']);
    Route::get('/artist/create',[ArtistController::class,'create']);
    Route::post('/artist',[ArtistController::class,'store']);

    Route::get('/artist/edit/{id}',[ArtistController::class,'edit']);

    Route::put('/artist/update/{id}',[ArtistController::class,'update']);
    Route::delete('/artist/{artist}',[ArtistController::class,'destroy']);

/* Genre Routes */
    Route::get('/genres',[GenreController::class,'index']);
    Route::get('/genre/create',[GenreController::class,'create']);
    Route::post('/genre',[GenreController::class,'store']);
    Route::get('/genre/edit/{id}',[GenreController::class,'edit']);
    Route::put('/genre/update/{id}',[GenreController::class,'update']);
    Route::delete('/genre/delete/{id}',[GenreController::class,'destroy']);


});



Route::get('/',function (){
    return view('index');
});
