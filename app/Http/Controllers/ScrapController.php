<?php

namespace App\Http\Controllers;

use App\Models\Actor;
use App\Models\Genre;
use App\Models\Movie;
use Illuminate\Http\Request;
use Illuminate\Support\Str;

class ScrapController extends Controller
{
    public function scrap(Request $request) {
        $IMDB = new ImdbController($request->name);

    if ($IMDB->isReady) {
    $data = [
        'title' => $IMDB->getTitle(),
        'slug' => Str::slug($IMDB->getTitle()),
        'duration' => $IMDB->getRuntime(),
        'synopsis' => $IMDB->getDescription(),
        'poster' => $IMDB->getPoster($sSize = 'small', $bDownload = true),
        'year' => $IMDB->getYear(),
        'trailer' => $IMDB->getTrailerAsUrl($bEmbed = true),
        'rating' => $IMDB->getRating()
    ];

    // Insert or update the movie
    $movie = Movie::updateOrCreate(['title' => $data['title']], $data);

    // Get the genre names from the scraped data
    $genreNames = explode(' / ', $IMDB->getGenre());

    // Find or create the genres and get their IDs
    $genreIds = collect($genreNames)->map(function ($genreName) {
        $genre = Genre::firstOrCreate(['name' => $genreName]);
        return $genre->id;
    });

    // Sync the genre IDs with the movie
    $movie->genres()->sync($genreIds);


    $actorNames = explode(' / ', $IMDB->getCastAndCharacter($limit = 20));
    $actorImages = $IMDB->getCastImages($iLimit = 20, $bMore = true, $sSize = 'mid');
    $actorsData = collect($actorNames)->zip($actorImages);

    $actorIds = $actorsData->map(function ($data) {
        $actor = Actor::firstOrCreate([
            'name' => $data[0],
        ], [
            'image' => $data[1]
        ]);
        return $actor->id;
    });

    // Sync the actor IDs with the movie
    $movie->actors()->sync($actorIds);

    return redirect()->back()->with('success', 'Scraping data succeeded.');
    
    } else {
        return redirect()->back()->with('toast_error', 'Movie not found.');
    }

    }
}
