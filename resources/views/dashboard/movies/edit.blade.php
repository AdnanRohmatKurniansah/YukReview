@extends('layout.dashboard')

@section('content')
<div class="row m-3">
    <!-- Area Chart -->
    <div class="col-xl-9 col-lg-7">

        <div class="card mb-4">
            <div class="card-header py-3">
                <h5 class="m-0 font-weight-bold text-primary">Edit Movie</h5>
            </div>
            <div class="container">
              <form action="/dashboard/movies/{{ $movie->slug }}" method="post" enctype="multipart/form-data" class="m-3">
                @method('put')
                  @csrf
                  <div class="mb-3">
                      <label for="title" class="form-label">Title</label>
                      <input type="text" class="form-control @error('title') is-invalid @enderror" id="title" 
                      name="title" required autofocus value="{{ old('title', $movie->title) }}">
                      @error('title')
                          <div class="invalid-feedback">
                            {{ $message }}
                          </div>
                      @enderror
                    </div>
                    <div class="mb-3">
                        <label for="slug" class="form-label">Slug</label>
                        <input type="text" class="form-control @error('slug') is-invalid @enderror" id="slug" 
                        name="slug" required value="{{ old('slug', $movie->slug) }}">
                        @error('slug')
                            <div class="invalid-feedback">
                              {{ $message }}
                            </div>
                        @enderror
                      </div>
                      <div class="mb-3">
                        <label class="form-label">Genre</label>
                        @php
                          $selectedGenreIDs = $movie->genres->pluck('id')->toArray();
                        @endphp
                        @foreach ($genres as $genreID => $genreName)
                          <div class="form-check">
                            <input class="form-check-input" type="checkbox" name="genre_ids[]" value="{{ $genreID }}" @checked(in_array($genreID, $selectedGenreIDs))>
                            <label class="form-check-label">
                              {{ $genreName }}
                            </label>
                          </div>
                        @endforeach
                      </div>
                      <div class="mb-3">
                        <label for="duration" class="form-label">Duration</label>
                        <input type="text" class="form-control @error('duration') is-invalid @enderror" id="duration" 
                        name="duration" required autofocus value="{{ old('duration', $movie->duration) }}">
                        @error('duration')
                            <div class="invalid-feedback">
                              {{ $message }}
                            </div>
                        @enderror
                      </div>
                      <div class="mb-3">
                        <label for="trailer" class="form-label">Trailer</label>
                        <input type="text" class="form-control @error('trailer') is-invalid @enderror" id="trailer" 
                        name="trailer" required autofocus value="{{ old('trailer', $movie->trailer) }}">
                        @error('trailer')
                            <div class="invalid-feedback">
                              {{ $message }}
                            </div>
                        @enderror
                      </div>
                    <div class="mb-3">
                      <label for="poster" class="form-label">Poster</label>
                      <input type="hidden" name="oldPoster" value="{{ $movie->poster }}">
                        @if ($movie->poster)
                          <img src="{{ asset('storage/' . $movie->poster) }}" class="img-preview img-fluid mb-3 col-sm-5 d-block">
                        @else
                          <img class="img-preview img-fluid mb-3 col-sm-5">
                        @endif
                    <input class="form-control @error('poster') is-invalid @enderror" type="file" id="poster"
                      name="poster" onchange="previewPoster()">
                    @error('poster')
                        <div class="invalid-feedback">
                          {{ $message }}
                        </div>
                    @enderror
                  </div>
                  <div class="mb-3">
                    <label for="synopsis" class="form-label">Synopsis</label>
                    @error('synopsis')
                      <p class="text-danger">{{ $message }}</p>
                    @enderror
                      <input id="synopsis" type="hidden" name="synopsis" value="{{ old('synopsis', $movie->synopsis) }}">
                      <trix-editor input="synopsis"></trix-editor>
                  </div> 
                  <div class="mb-3">
                    <label for="rating" class="form-label">Rating</label>
                    <input type="number" class="form-control @error('rating') is-invalid @enderror" id="rating" 
                    name="rating" required autofocus value="{{ old('rating', $movie->rating) }}">
                    @error('rating')
                        <div class="invalid-feedback">
                          {{ $message }}
                        </div>
                    @enderror
                  </div>
                  <button type="submit" class="btn btn-primary">Update Movie</button>
                </form> 
            </div>

        </div>
    </div>
</div>

<script>

    const title = document.querySelector('#title')
    const slug = document.querySelector('#slug')
    
    title.addEventListener('change', function() {
        fetch('/dashboard/movies/checkSlug?title=' + title.value)
        .then(response => response.json())
        .then(data => slug.value = data.slug)
    });
    document.addEventListener('trix-file-accept', function(e) {
       e.preventDefault();
    })

  function previewPoster() {
    const poster = document.querySelector('#poster');
    const imgPreview = document.querySelector('.img-preview');
    imgPreview.style.display = 'block';
    const oFReader = new FileReader();
    oFReader.readAsDataURL(poster.files[0]);
    oFReader.onload = function(oFREvent) {
      imgPreview.src = oFREvent.target.result;
    }
  }
  </script>

@endsection