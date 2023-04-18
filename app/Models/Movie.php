<?php

namespace App\Models;

use Cviebrock\EloquentSluggable\Sluggable;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Movie extends Model
{
    use HasFactory, Sluggable;

    protected $guarded = ['id'];

    public function scopeFilter($query, array $filters) 
    {
        $query->when($filters['search'] ?? false, function($query, $search) {
            return $query->where(function($query) use ($search) {
                 $query->where('title', 'like', '%' . $search . '%')
                 ->orWhereHas('genres', function($query) use ($search) {
                    $query->where('name', 'like', '%' . $search . '%');
                });
             });
         }); 

        $query->when($filters['filterGenre'] ?? false, function ($query, $filterGenre) {
            // jumlah genre yg movie punya
            $genreCount = count($filterGenre);
            // dapatkan movie berdasarkan genre yg dipilih
            return $query->whereHas('genres', function ($query) use ($filterGenre, $genreCount) {
                $query->whereIn('slug', $filterGenre)
                      ->groupBy('movies.id')
                      ->havingRaw('COUNT(DISTINCT genres.id) = ?', [$genreCount])
                      ->select('movies.id');
            });
        });

        $query->when($filters['year'] ?? false, function ($query, $year) {
            // filter berdasarkan tahun
            return $query->where('year', $year);
        });

        $query->when($filters['rating'] ?? false, function ($query, $rating) {
            // filter berdasarkan tahun
            return $query->where('rating', $rating);
        });
        return $query;        
        
    }

    public function genres()
    {
        return $this->belongsToMany(Genre::class);
    }

    public function getRouteKeyName()
    {
        return 'slug';
    }
    
    public function sluggable(): array
    {
        return [
            'slug' => [
                'source' => 'title'
            ]
        ];
    }
    public function Reviews()
    {
    return $this->hasMany(Review::class, 'movie_id');
    }
}
