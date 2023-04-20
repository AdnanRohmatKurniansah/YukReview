<?php

namespace App\Models;


use Cviebrock\EloquentSluggable\Sluggable;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Kyslik\ColumnSortable\Sortable;

class Genre extends Model
{
    use HasFactory, Sluggable, Sortable;

    protected $guarded = ['id'];

    public $sortable = ['name'];

    public function movies()
    {
        return $this->belongsToMany(Movie::class);
    }

    public function getRouteKeyName()
    {
        return 'slug';
    }
    
    public function sluggable(): array
    {
        return [
            'slug' => [
                'source' => 'name'
            ]
        ];
    }
}
