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

        $artists = Artist::withCount('songs')->latest()->get();
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

    public function edit($id){

        $artist = Artist::findOrFail($id);
        $allGenres = Genre::all();
        $selectedGenres = $artist->genres;
        return view('admin.artists.edit', ['artist' => $artist, 'selectedGenres' => $selectedGenres, 'allGenres' => $allGenres]);
    }


    public function update(Request $request, $id){

        $artist = Artist::findOrFail($id);
        $validatedData = $request->validate([
           'name'=>'required|string|max:255',
           'bio'=>'required|string',
        ]);

        $artist->update($validatedData);

        // sync genre
        if($request->has('genres')){
            $artist->genres()->sync($request->input('genres'));
        }else {
            $artist->genres()->detach();
        }

        return redirect('/artists')->with('success', 'Artist has been updated successfully.');

    }

    public function destroy(Artist $artist){
        $artist->delete();
        return redirect('/artists')->with('success', 'Artist has been deleted successfully.');
    }
}
