@extends('layout.dashboard')

@section('content')
<div class="row m-3">
    <div class="col-xl-9 col-lg-7">
    
        <div class="card mb-4">
            <div class="card-header py-3">
                <h5 class="m-0 font-weight-bold text-primary">Add New Movie</h5>
            </div>
            <div class="container">
                <form action="/dashboard/movies" method="post" enctype="multipart/form-data" class="m-3">
                      @csrf
                      <div class="mb-3">
                          <label for="title" class="form-label">Title</label>
                          <input type="text" class="form-control @error('title') is-invalid @enderror" id="title" 
                          name="title" required autofocus value="{{ old('title') }}">
                          @error('title')
                              <div class="invalid-feedback">
                                {{ $message }}
                              </div>
                          @enderror
                        </div>
                        <div class="mb-3">
                            <label for="slug" class="form-label">Slug</label>
                            <input type="text" class="form-control @error('slug') is-invalid @enderror" id="slug" 
                            name="slug" required value="{{ old('slug') }}">
                            @error('slug')
                                <div class="invalid-feedback">
                                  {{ $message }}
                                </div>
                            @enderror
                          </div>
                          <div class="mb-3">
                            <label class="form-label">Genre</label>
                            <div class="row">
                              <div class="col-md-6">
                                @foreach ($genres->take(13) as $genreID => $genreName)
                                <div class="form-check">
                                  <input class="form-check-input" type="checkbox" name="genre_ids[]" value="{{ $genreID }}">
                                  <label class="form-check-label">
                                    {{ $genreName }}
                                  </label>
                                </div>
                              @endforeach
                              </div>
                              <div class="col-md-6">
                                @foreach ($genres->skip(13) as $genreID => $genreName)
                              <div class="form-check">
                                <input class="form-check-input" type="checkbox" name="genre_ids[]" value="{{ $genreID }}">
                                <label class="form-check-label">
                                  {{ $genreName }}
                                </label>
                              </div>
                              @endforeach
                              </div>
                            </div>

                          </div>
                          <div class="mb-3">
                            <label for="duration" class="form-label">Duration</label>
                            <input type="text" class="form-control @error('duration') is-invalid @enderror" id="duration" 
                            name="duration" required autofocus value="{{ old('duration') }}">
                            @error('duration')
                                <div class="invalid-feedback">
                                  {{ $message }}
                                </div>
                            @enderror
                          </div>
                          <div class="mb-3">
                            <label for="trailer" class="form-label">Trailer</label>
                            <input type="text" class="form-control @error('trailer') is-invalid @enderror" id="trailer" 
                            name="trailer" required autofocus value="{{ old('trailer') }}">
                            @error('trailer')
                                <div class="invalid-feedback">
                                  {{ $message }}
                                </div>
                            @enderror
                          </div>
                          <div class="mb-3">
                            <label for="year">Year</label>
                            <select name="year" class="form-control">
                              @php
                                $defaultYear = old('year') ?? 1900;
                              @endphp
                              @for ($i = date('Y'); $i >= 1900; $i--)
                                @if ($i == $defaultYear)
                                  <option value="{{ $i }}" selected>{{ $i }}</option>
                                @else
                                  <option value="{{ $i }}">{{ $i }}</option>
                                @endif
                              @endfor
                            </select>
                          </div>
                          
                        <div class="mb-3">
                          <label for="poster" class="form-label">Poster</label>
                          <img class="img-preview img-fluid mb-3 col-sm-5">
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
                          <input id="synopsis" type="hidden" name="synopsis" value="{{ old('synopsis') }}">
                          <trix-editor input="synopsis"></trix-editor>
                      </div> 
                      <div class="mb-3">
                        <label for="rating">Rating</label>
                        <select name="rating" class="form-control">
                          @php
                            $defaultRating = old('rating') ?? 1;
                          @endphp
                          @for ($i = 1; $i <= 10; $i++)
                            @if ($i == $defaultRating)
                              <option value="{{ $i }}" selected>{{ $i }}</option>
                            @else
                              <option value="{{ $i }}">{{ $i }}</option>
                            @endif
                          @endfor
                        </select>
                      </div>
                      
                      <button type="submit" class="btn btn-primary">Create Movie</button>
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