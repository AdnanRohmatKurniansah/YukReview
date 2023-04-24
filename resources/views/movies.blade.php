@extends('layout.main')

@section('content')
<section id="movies" style="background-color: rgb(19, 23, 34); padding-top: 100px; padding-bottom: 50px">
    <div class="container">
        <div class="row">
            <div class="col-lg-4">
                <div class="sidebar p-3" style="border: 1px solid rgb(70, 69, 69); background-color: rgb(28, 33, 46)">
                  <form action="" method="get">
                    <div class="genre pb-3" style="color: white;">
                      <div class="row" style="border-bottom: 1px solid rgb(70, 69, 69); padding-bottom: 5px; ">
                        <div class="col-md-8">
                          <h3>Genres</h3>
                        </div>
                        <div class="col-md-4">
                          <button type="submit" class="btn btn-primary">Filter</button>
                        </div>
                      </div>
                        <div class="row">
                          <div class="col-md-6">
                          @php
                              $checked = [];
                              $currentUrl = request()->fullUrl();
                              if (strpos($currentUrl, 'filterGenre') !== false) {
                                  $checked = request()->query('filterGenre');
                              }
                          @endphp
                          @foreach ($genres->take(13) as $genre)   
                              <div class="form-check">
                                  <input class="form-check-input" name="filterGenre[]" type="checkbox" value="{{ $genre->slug }}" {{ in_array($genre->slug, $checked) ? 'checked' : '' }}>
                                  <label class="form-check-label">
                                      {{ $genre->name }}
                                  </label>
                              </div>
                          @endforeach
                      </div>

                          <div class="col-md-6">
                            @foreach ($genres->skip(13) as $genre)
                              <div class="form-check">
                                <input class="form-check-input" name="filterGenre[]" type="checkbox" value="{{ $genre->slug }}" {{ in_array($genre->slug, $checked) ? 'checked' : '' }}>
                                <label class="form-check-label">
                                    {{ $genre->name }}
                                </label>
                            </div>
                            @endforeach
                          </div>
                        </div>

                    </div>
                    <div class="year" style="color: white">
                        <h3 style="border-bottom: 1px solid rgb(70, 69, 69); padding-bottom: 5px">Movies by Year</h3>
                        <ul class="d-flex flex-wrap list-unstyled">
                          @php 
                            $currentYear = date('Y')
                          @endphp
                          @for($i = $currentYear; $i >= 2000; $i--)
                            <li>
                              <label class="radio">
                                <input type="radio" name="year" value="{{ $i }}" {{ request('year') == $i ? 'checked' : '' }} {{ request('year') == $i ? 'disabled' : '' }}>
                                <span style="color: #fff">{{ $i }}</span>
                              </label>
                            </li>
                          @endfor
                        </ul>                        
                    </div>
                    <div class="rate year" style="color: white">
                      <h3 style="border-bottom: 1px solid rgb(70, 69, 69); padding-bottom: 5px">Rating</h3>
                      <ul class="d-flex flex-wrap list-unstyled">
                        <li class="ten-star mb-2">
                            <label class="radio">
                              @for($i = 10; $i >= 1; $i--)
                              @php
                                  $mvs = \App\Models\Movie::where('rating', '10')->count()
                              @endphp
                              <input type="radio" name="rating" value="{{ $i }}" {{ request('rating') == $i ? 'checked' : '' }} {{ request('rating') == $i ? 'disabled' : '' }}>
                                  <i class="fa fa-star check"></i>
                              @endfor
                              <label class="count">({{ $mvs }})</label>
                            </label>
                        </li>
                        <li class="nine-star mb-2">
                          <label class="radio">
                            @for($i = 9; $i >= 1; $i--)
                            @php
                              $mvs = \App\Models\Movie::where('rating', '9')->count()
                            @endphp
                            <input type="radio" name="rating" value="{{ $i }}" {{ request('rating') == $i ? 'checked' : '' }} {{ request('rating') == $i ? 'disabled' : '' }}>
                                <i class="fa fa-star check"></i>
                            @endfor
                            <i class="fa fa-star"></i>
                            <label class="count">({{ $mvs }})</label>
                          </label>
                        </li>
                        <li class="eight-star mb-2">
                          <label class="radio">
                            @for($i = 8; $i >= 1; $i--)
                            @php
                              $mvs = \App\Models\Movie::where('rating', '8')->count();
                            @endphp
                            <input type="radio" name="rating" value="{{ $i }}" {{ request('rating') == $i ? 'checked' : '' }} {{ request('rating') == $i ? 'disabled' : '' }}>
                                <i class="fa fa-star check"></i>
                            @endfor
                            <i class="fa fa-star"></i>
                            <i class="fa fa-star"></i>
                          <label class="count">({{ $mvs }})</label>
                          </label>
                        </li>
                        <li class="seven-star mb-2">
                          <label class="radio">
                            @for($i = 7; $i >= 1; $i--)
                            @php
                              $mvs = \App\Models\Movie::where('rating', '7')->count();
                            @endphp
                            <input type="radio" name="rating" value="{{ $i }}" {{ request('rating') == $i ? 'checked' : '' }} {{ request('rating') == $i ? 'disabled' : '' }}>
                                <i class="fa fa-star check"></i>
                            @endfor
                            <i class="fa fa-star"></i>
                            <i class="fa fa-star"></i>
                            <i class="fa fa-star"></i>
                          <label class="count">({{ $mvs }})</label>
                          </label>
                        </li>
                        <li class="five-star mb-2">
                          <label class="radio">
                            @for($i = 5; $i >= 1; $i--)
                            @php
                              $mvs = \App\Models\Movie::where('rating', '5')->count();
                            @endphp
                            <input type="radio" name="rating" value="{{ $i }}" {{ request('rating') == $i ? 'checked' : '' }} {{ request('rating') == $i ? 'disabled' : '' }}>
                                <i class="fa fa-star check"></i>
                            @endfor
                            <i class="fa fa-star"></i>
                            <i class="fa fa-star"></i>
                            <i class="fa fa-star"></i>
                            <i class="fa fa-star"></i>
                            <i class="fa fa-star"></i>
                          <label class="count">({{ $mvs }})</label>
                          </label>
                        </li>
                    </ul>
                  </div>
                </form>
                </div>
                  
            </div>
            <div class="col-lg-8">
                <div class="movies p-3" style="color: white; ">
                  <div class="row" style="border-bottom: 1px solid rgb(70, 69, 69); padding-bottom: 5px">
                    <div class="col-md-6">
                      <h2>Movies</h2>
                    </div>
                    <div class="col-md-6">
                      <form action="/movies">
                        <div class="input-group mb-3">
                            <input type="text" class="form-control" name="search" placeholder="Search..." aria-label="Recipient's username" value="{{ request('search') }}">
                            <button class="btn btn-dark" type="submit"><i class="bi bi-search"></i></button>
                          </div>
                      </form>
                    </div>
                  </div>
                    @if ($movies->count())
                    <div class="row mt-4 pb-3" style="border-bottom: 1px solid rgb(70, 69, 69)">
                    @foreach ($movies as $movie)    
                      <div class="col-md-3 mb-3">
                        <div class="card bg-transparent" style="border: 1px solid rgb(70, 69, 69)">
                          <a href="/movies/{{ $movie->slug }}">
                            <img src="{{ asset('storage/' . $movie->poster) }}" class="card-img-top" alt="..." style="min-height: 200px; max-height: 200px">
                            <div class="card-body bg-dark" style="color: #fff">
                              <h6 class="card-text">{{ $movie->title }}</h6>
                              <p class="small card-text"><i class="fa fa-star check"></i> {{ $movie->rating }}/10</p>
                            </div>
                          </a>
                          </div>
                    </div>
                    @endforeach 
                    @else
                       <div class="col-12">
                          <h1 style="display: flex; justify-content:center ; margin-top: 100px">Movie Not Found</h1>
                      </div> 
                    @endif
                 </div>
                 <div class="d-flex justify-content-center">
                  {{ $movies->links() }}
                </div>
                </div>
            </div>
        </div>
    </div>
</section>
@endsection