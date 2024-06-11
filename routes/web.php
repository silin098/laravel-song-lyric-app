<?php

use App\Http\Controllers\Admin\DashboardController;
use App\Http\Controllers\Admin\LyricController;
use Illuminate\Support\Facades\Route;


Route::domain('Admin.'.env('APP_URL'))->group(function (){
    Route::get('/', [DashboardController::class,'index']);

    Route::get('/lyrics',[LyricController::class,'index'])->name('lyrics.index');
});



Route::get('/',function (){
    return view('index');
});
