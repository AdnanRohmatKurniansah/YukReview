<?php

namespace App\Http\Controllers;

use App\Models\Genre;
use App\Models\Movie;
use Cviebrock\EloquentSluggable\Services\SlugService;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class MovieController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('dashboard.movies.index', [
            "movies" =>  Movie::all()
        ]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('dashboard.movies.create', [
            'genres' => Genre::all()
        ]);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'title' => 'required|max:255',
            'slug'  => 'required|unique:movies',
            'genre_id' => 'required',
            'duration' => 'required',
            'trailer' => 'required',
            'poster' => 'image|file|max:2048',
            'synopsis' => 'required',
            'rating' => 'required'
        ]);  
     
        if($request->file('poster')) {
            $validatedData['poster'] = $request->file('poster')->store('movie-images');
        } // jika tdk ada maka gunakan image lama


        Movie::create($validatedData);
        
        return redirect('/dashboard/movies')->with('success', 'New Movie has been added!');
    }

    /**
     * Display the specified resource.
     */
    public function show(Movie $movie)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Movie $movie)
    {
        return view('dashboard.movies.edit', [
            'movie' => $movie,
            'genres' => Genre::all()
        ]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Movie $movie)
    {
        $rules = [
            'title' => 'required|max:255',
            'genre_id' => 'required',
            'duration' => 'required',
            'trailer' => 'required',
            'poster' => 'image|file|max:2048 ',
            'synopsis' => 'required',
            'rating' => 'required'
        ]; 
        
        if($request->slug != $movie->slug) {
          $rules['slug'] = 'required|unique:movies';
        }

        $validatedData = $request->validate($rules);

        if ($request->file('poster')) {
            if ($request->oldPoster) {
                Storage::delete($request->oldPoster);
            }
            $validatedData['poster'] = $request->file('poster')->store('movie-images');
        }

        if($request->file('poster')) {
            $validatedData['poster'] = $request->file('poster')->store('movie-images');
        } 
        

        Movie::where('id', $movie->id)
             ->update($validatedData);
        
        return redirect('/dashboard/movies')->with('success', 'Movie has been updated!');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Movie $movie)
    {
        if ($movie->image) {
            Storage::delete($movie->poster);
        }
        
        Movie::destroy($movie->id);
        return redirect('/dashboard/movies')->with('success', 'Movie has been deleted!');
    }
    public function checkSlug(Request $request)
    {
        $slug = SlugService::createSlug(Movie::class, 'slug', $request->title);
        return response()->json(['slug' => $slug]);
    }
}
