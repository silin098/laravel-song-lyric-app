<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Lyric;
use Illuminate\Http\Request;

class LyricController extends Controller
{

    public function index()
    {
        $lyrics = Lyric::all();
        return view('Admin.lyric', ['lyrics' => $lyrics]);


    }
    public function create(){


    }

    public function store(Request $request){

    }

    public function show(Lyric $lyric){

    }

    public function edit(Lyric $lyric){

    }
    public function update(Request $request, Lyric $lyric){

    }

    public function destroy(Lyric $lyric){

    }
}
