<?php

use App\Http\Controllers\AuthController;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\MovieController;
use App\Http\Controllers\GenreController;
use App\Http\Controllers\NewsController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\ScrapController;
use App\Http\Controllers\UserController;
use App\Models\Actor;
use App\Models\Genre;
use App\Models\Movie;
use App\Models\News;
use App\Models\Review;
use Illuminate\Support\Facades\Request;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('home', [
        'title' => "Home",
        'movies' => Movie::latest()->paginate(3)
    ]);
});

Route::get('/movies', function () {
    return view('movies', [
        'title' => "All Movie",
        'movies' => Movie::latest()->filter(request(['search', 'filterGenre', 'year', 'rating']))->paginate(16),
        'genres' => Genre::orderBy('name', 'asc')->get(), 
    ]);
});

Route::get('/movies/{movie:slug}', function (Movie $movie) {
    return view('movieDetail', [
        'title' => "Movie",
        'movie' => $movie,
        'news' => News::latest()->paginate(2),
        'movies' =>  Movie::orderBy('rating', 'desc')->paginate(3),
        'reviews' => Review::where('movie_id', $movie->id)->get()
    ]);
});

Route::get('/news', function () {
    return view('news', [
        "title" => "News",
        "news" =>  News::latest()->filter(request(['search', 'category']))
            ->paginate(3)->withQueryString(),
        "movies" =>  Movie::orderBy('rating', 'desc')->paginate(3)
    ]);
});

Route::get('/news/{news:slug}', function (News $news) {
    return view('newsDetail', [
        'title' => "News Detail",
        'news' => $news,
        "movies" =>  Movie::orderBy('rating', 'desc')->paginate(3)
    ]);
});

Route::get('/toplists', function () {
    return view('toplists', [
        'title' => "Top Lists",
        "movies" =>  Movie::orderBy('rating', 'desc')->paginate(10)
    ]);
});

Route::prefix('auth')->group(function() {
    Route::middleware(['guest'])->group(function() {
        Route::get('/login', [AuthController::class, 'login'])->name('login');
        Route::post('/login', [AuthController::class, 'authenticate']);
        Route::get('/register', [AuthController::class, 'register']);
        Route::post('/register', [AuthController::class, 'store']);
    });
    
    Route::middleware(['auth'])->group(function () {
        Route::post('/logout', [AuthController::class, 'logout']);
    });
});

Route::post('/movies/{movie:slug}', [MovieController::class, 'reviewMovie'])->name('review-movie');

Route::middleware(['auth'])->group(function () {
    Route::prefix('dashboard')->group(function () {
        Route::get('/profile', [ProfileController::class, 'show'])->name('change-profile');
        Route::post('/profile', [ProfileController::class, 'updateProfile'])->name('update-profile');
        Route::get('/change-password', [AuthController::class, 'show'])->name('change-password');
        Route::post('/change-password', [AuthController::class, 'updatePassword'])->name('update-password');
    });
    Route::middleware(['admin'])->group(function() {
        Route::get('/dashboard', function () {
            return view('dashboard.index');
        });
        Route::prefix('dashboard')->group(function () {
            Route::get('/movies/genres/checkSlug', [GenreController::class, 'checkSlug']);
            Route::get('/movies/checkSlug', [MovieController::class, 'checkSlug']);
            Route::get('/news/checkSlug', [NewsController::class, 'checkSlug']);
            Route::get('/news/categories/checkSlug', [CategoryController::class, 'checkSlug']);
            Route::resource('/movies/genres', GenreController::class)->except('show');
            Route::resource('/movies', MovieController::class)->except('show');
            Route::resource('/news/categories', CategoryController::class)->except('show');
            Route::resource('/news', NewsController::class)->except('show');
            Route::get('/user/index', [UserController::class, 'index']);
            Route::post('/user/import', [UserController::class, 'import']);
            Route::get('/user/export', [UserController::class, 'export']);

            Route::get('/scrap', [ScrapController::class, 'scrap']);
        });
    });
});

