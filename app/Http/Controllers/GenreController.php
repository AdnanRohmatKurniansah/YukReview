<?php

namespace App\Http\Controllers;

use App\Models\Genre;
use Cviebrock\EloquentSluggable\Services\SlugService;
use Illuminate\Http\Request;

class GenreController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('dashboard.movies.genres.index', [
            'genres' => Genre::all()
        ]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('dashboard.movies.genres.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'name' => 'required|max:100',
            'slug'  => 'required|unique:genres'
        ]);  

        Genre::create($validatedData);
        
        return redirect('/dashboard/movies/genres')->with('success', 'New Genre has been added!');
    }

    /**
     * Display the specified resource.
     */
    public function show(Genre $genre)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Genre $genre)
    {
        return view('dashboard.movies.genres.edit', [
            'genre' => $genre
        ]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Genre $genre)
    {
        $rules = [
            'name' => 'required|max:100',
        ]; 
        
        if($request->slug != $genre->slug) {
          $rules['slug'] = 'required|unique:genres';
        }
        
        $validatedData = $request->validate($rules);
        
        Genre::where('id', $genre->id)
             ->update($validatedData);
        
        return redirect('/dashboard/movies/genres')->with('success', 'Genre has been updated!');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Genre $genre)
    {
        Genre::destroy($genre->id);
        return redirect('/dashboard/movies/genres')->with('success', 'Genre has been deleted!');
    }
    public function checkSlug(Request $request)
    {
        $slug = SlugService::createSlug(Genre::class, 'slug', $request->name);
        return response()->json(['slug' => $slug]);
    }
}
