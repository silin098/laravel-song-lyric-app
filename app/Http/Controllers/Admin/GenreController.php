<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Genre;
use Illuminate\Http\Request;

class GenreController extends Controller
{
    public function index(){

        $genres = Genre::withCount('songs')->latest()->get();

        return view('admin.genres.index', compact('genres'));
    }

    public function create()
    {
        return view('admin.genres.create');

    }

    public function store(Request $request){

        $request->validate([
            'name'=>'required|unique:genres',
        ]);

        $genre = Genre::create([
            'name'=>$request->input('name'),
        ]);
        return redirect('/genres')->with('success', 'Genre created successfully.');
    }

    public function edit($id){
        $genre = Genre::findOrFail($id);
        return view('admin.genres.edit', compact('genre'));
    }

    public function update(Request $request,$id){
        $genre = Genre::findOrFail($id);
        $request->validate([
            'name'=>'required|unique:genres,name,'.$genre->id,
        ]);
        $genre->name = $request->input('name');
        $genre->save();

        return redirect('/genres')->with('success', 'Genre updated successfully.');
    }

    public function destroy($id){
        $genre = Genre::findOrFail($id);
       $genre->delete();
       return redirect('/genres')->with('success', 'deleted');
    }
}
