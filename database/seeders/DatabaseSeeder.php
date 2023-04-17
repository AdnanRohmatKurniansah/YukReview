<?php

namespace Database\Seeders;

use Illuminate\Support\Str;
// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // \App\Models\User::factory(10)->create();

        \App\Models\User::create([
            'name' => 'Adnan Rohmat K',
            'email' => 'atnandimas@gmail.com',
            'role' => 'admin',
            'password' => Hash::make('admin123')
        ]);

        // \App\Models\Genre::factory()->create([
        //     'name' => 'Action',
        //     'slug' => Str::slug('Action'),
        // ]);
        // \App\Models\Genre::factory()->create([
        //     'name' => 'Comedy',
        //     'slug' => Str::slug('comedy'),
        // ]);
        // \App\Models\Genre::factory()->create([
        //     'name' => 'Adventure',
        //     'slug' => Str::slug('Adventure'),
        // ]);
        // \App\Models\Genre::factory()->create([
        //     'name' => 'Animation',
        //     'slug' => Str::slug('Animation'),
        // ]);
        // \App\Models\Genre::factory()->create([
        //     'name' => 'Annimation',
        //     'slug' => Str::slug('Annimation'),
        // ]);
        // \App\Models\Genre::factory()->create([
        //     'name' => 'Biography',
        //     'slug' => Str::slug('Biography'),
        // ]);
        // \App\Models\Genre::factory()->create([
        //     'name' => 'Crime',
        //     'slug' => Str::slug('Crime'),
        // ]);
        // \App\Models\Genre::factory()->create([
        //     'name' => 'Drama',
        //     'slug' => Str::slug('Drama'),
        // ]);
        // \App\Models\Genre::factory()->create([
        //     'name' => 'Family',
        //     'slug' => Str::slug('Family'),
        // ]);
        // \App\Models\Genre::factory()->create([
        //     'name' => 'Fantacy',
        //     'slug' => Str::slug('Fantacy'),
        // ]);
        // \App\Models\Genre::factory()->create([
        //     'name' => 'History',
        //     'slug' => Str::slug('History'),
        // ]);

        $genres = [    ['name' => 'Action'],
            ['name' => 'Comedy'],
            ['name' => 'Adventure'],
            ['name' => 'Animation'],
            ['name' => 'Annimation'],
            ['name' => 'Biography'],
            ['name' => 'Crime'],
            ['name' => 'Drama'],
            ['name' => 'Family'],
            ['name' => 'Fantacy'],
            ['name' => 'History'],
        ];

        foreach ($genres as $genreData) {
            \App\Models\Genre::create([
                'name' => $genreData['name'],
                'slug' => Str::slug($genreData['name']),
            ]);
        }
    }
}
