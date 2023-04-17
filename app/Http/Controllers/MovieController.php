<?php

namespace App\Http\Controllers;

use App\Models\Genre;
use App\Models\Movie;
use App\Models\Review;
use Cviebrock\EloquentSluggable\Services\SlugService;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
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
            'genres' => Genre::orderBy('name', 'asc')->get()->pluck('name', 'id')
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
            // 'genre_id' => 'required',
            'genre_ids' => ['required', 'array'],
            'duration' => 'required',
            'trailer' => 'required',
            'year' => 'required',
            'poster' => 'image|file|max:2048',
            'synopsis' => 'required',
            'rating' => 'required'
        ]);  
     
        if($request->file('poster')) {
            $validatedData['poster'] = $request->file('poster')->store('movie-images');
        } // jika tdk ada maka gunakan image lama


        if ($movie = Movie::create($validatedData)) {
            $movie->genres()->sync($validatedData['genre_ids']);
        }
        
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
            'genres' => Genre::orderBy('name', 'asc')->get()->pluck('name', 'id')
        ]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Movie $movie)
{
    $rules = [
        'title' => 'required|max:255',
        'genre_ids' => ['required', 'array'],
        'duration' => 'required',
        'trailer' => 'required',
        'year' => 'required',
        'poster' => 'image|file|max:2048',
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

    if ($movie->update($validatedData)) {
        $movie->genres()->sync($validatedData['genre_ids']);
        return redirect('/dashboard/movies')->with('success', 'Movie has been updated!');
    } else {
        return redirect('/dashboard/movies')->with('toast_error', 'Failed to update movie!');
    }
}

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Movie $movie)
{   
    $movieGenres = $movie->genres;
    
    foreach ($movieGenres as $genre) {
        $genre->movies()->detach($movie->id);
    }

    if ($movie->poster) {
        Storage::delete($movie->poster);
    }
    
    if ($movie->delete()) {
        return redirect('/dashboard/movies')->with('success', 'Movie has been deleted!');
    } else {
        return redirect('/dashboard/movies')->with('toast_error', 'Failed to delete movie!');
    }
}

    public function checkSlug(Request $request)
    {
        $slug = SlugService::createSlug(Movie::class, 'slug', $request->title);
        return response()->json(['slug' => $slug]);
    }

    public function reviewMovie(Request $request) 
    {
        if (!auth()->check()) {
            return redirect('/auth/login')->with('toast_error', 'You must be logged in to submit a review.');
        }

        $validatedData = $request->validate([
            'movie_id' => 'required',
            'g-recaptcha-response' => 'recaptcha',
            'rating' => 'required|numeric',
            'review' => 'required|min:4'
        ]);
        
        $validatedData['name'] = auth()->user()->name;
        $validatedData['email'] = auth()->user()->email;
        

        Review::create($validatedData);

        return redirect()->back()->with('success', 'Thankyou for your review');
    }
}
