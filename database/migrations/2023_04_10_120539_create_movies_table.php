<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('movies', function (Blueprint $table) {
            $table->id();
            $table->string('title');
            $table->string('slug');
            $table->string('duration');
            $table->text('synopsis');
            $table->text('poster');
            $table->string('year');
            $table->string('trailer');
            $table->integer('rating');
            $table->timestamps();
        });

        Schema::create('genre_movie', function (Blueprint $table) {
            $table->id();
            $table->foreignId('genre_id')->constrained();
            $table->foreignId('movie_id')->constrained();
            // $table->integer('user_rating')->nullable();
            // $table->unique(['genre_id', 'movie_id']);
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('genre_movie');
        Schema::dropIfExists('movies');
    }
};
