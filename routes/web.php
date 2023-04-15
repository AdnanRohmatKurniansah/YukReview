<?php

use App\Http\Controllers\AuthController;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\MovieController;
use App\Http\Controllers\GenreController;
use App\Http\Controllers\NewsController;
use App\Http\Controllers\ProfileController;
use App\Models\Genre;
use App\Models\Movie;
use App\Models\News;
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
        'movies' => Movie::latest()->paginate(3)
    ]);
});

Route::get('/movies', function () {
    return view('movies', [
        'movies' => Movie::latest()->filter(request(['search', 'filterGenre']))->paginate(16),
        'genres' => Genre::all(), 
    ]);
});

Route::get('/movies/{movie:slug}', function (Movie $movie) {
    return view('movieDetail', [
        'title' => "Movies",
        'movie' => $movie,
        'news' => News::latest()->paginate(2),
        "movies" =>  Movie::orderBy('rating', 'desc')->paginate(3)
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
        "movies" =>  Movie::orderBy('rating', 'desc')->paginate(10)
    ]);
});

Route::prefix('auth')->group(function() {
    Route::get('/login', [AuthController::class, 'login'])->name('login');
    Route::post('/login', [AuthController::class, 'authenticate']);
    Route::get('/register', [AuthController::class, 'register']);
    Route::post('/register', [AuthController::class, 'store']);
    
    Route::middleware(['auth'])->group(function () {
        Route::post('/logout', [AuthController::class, 'logout']);
    });
});


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
        });
    });
});

