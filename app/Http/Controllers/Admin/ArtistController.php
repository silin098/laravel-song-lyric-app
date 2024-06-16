<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Artist;
use Illuminate\Http\Request;
use App\Models\Genre;

class ArtistController extends Controller
{
    public function index()
    {

        $artists = Artist::withCount('songs')->get();
        return view('admin.artists.index', ['artists' => $artists]);

    }


    public function create(){
        $genres = Genre::all();

        return view('admin.artists.create',['genres' => $genres]);
        //return response()->json($genres);
    }


    public function store(Request $request){
         $request->validate([
             'name'=>'required|string|max:255',
             'bio'=>'required|string',
             'genres'=>'required|array',
             'genres.*' => 'exists:genres,id',
         ]);

         $artist = Artist::create([
             'name'=>$request->input('name'),
             //'slug'=>$request->input('slug'),
             'bio'=>$request->input('bio'),
         ]);


         $artist->genres()->attach($request->input('genres'));

         return redirect('/artists')->with('success', 'Artist has been created successfully.');
    }
}
