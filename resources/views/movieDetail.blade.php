@extends('layout.main')

@section('content')
<section id="movieDetail"  style="background-color: rgb(19, 23, 34); color: #fff; padding-bottom: 100px">
    <div class="container">
        <div class="trailer d-flex justify-content-center pt-5">
          <div class="col-10">
            <iframe class="mt-5 mb-3" width="100%" height="400" src="{{ $movie->trailer }}">
            </iframe>
          </div>
        </div>
        <div class="row mt-5">
            <!-- left -->
            <div class="col-lg-8 mb-5">
                <div class="row">
                    <div class="col-md-4">
                        <div class="card" style="border: 1px solid rgb(70, 69, 69)">
                            <img src="{{ asset('storage/' . $movie->poster) }}" class="card-img" alt="..." style="min-height: 300px; max-height: 300px">
                          </div>
                    </div>
                    <div class="col-md-8">
                        <h3 class="movie-title">{{ $movie->title }}</h3>
                        <div class="movie-info">
                            <p>Duration: <i class="bi bi-stopwatch"></i> {{ $movie->duration }}</p>
                            <ul class="list-unstyled">
                                <li><b>Genre :</b> {{ implode(',', $movie->genres->pluck('name')->toArray()) }}</li>
                                <li><b>Rating :</b> {{ $movie->rating }}/10</li>
                                <li><b>Release :</b> {{ $movie->year }}</li>
                            </ul>
                        </div>
                  
                    </div>
                </div>
                <div class="row mt-5">
                    <div class="col-12">
                        <h3 style="border-bottom: 1px solid rgb(70, 69, 69); padding-bottom: 5px; ">Synopsis</h3>
                        <p>{!! $movie->synopsis !!}</p>
                        <h3 style="border-bottom: 1px solid rgb(70, 69, 69); padding-bottom: 5px; ">Actors</h3>
                        <div class="actor pt-3">
                          <div id="carouselExampleAutoplaying" class="carousel slide" data-bs-ride="carousel">
                            <div class="carousel-inner" >
                              <div class="carousel-item active">
                                <div class="row">
                                  @foreach ($movie->actors->take(3) as $actor) 
                                    <div class="col-md-4 mb-3">
                                        <div class="card" style="color: white;border: 1px solid rgb(70, 69, 69)">
                                          @if ($actor->image == 'not-found.jpg')
                                            <img src="/assets/img/blank.png" class="card-img-top" style="max-height: 200px; min-height: 200px">
                                          @else
                                            <img src="{{ $actor->image }}" class="card-img-top" style="max-height: 200px; min-height: 200px">
                                          @endif
                                            <div class="card-body bg-dark">
                                                @php
                                                    $as = explode(" as ", $actor->name);
                                                    $name = isset($as[0]) ? trim($as[0]) : $actor->name;
                                                    $as = isset($as[1]) ? trim($as[1]) : '';
                                                @endphp
                                                <h6 class="card-text">{{ $name }}</h6>
                                                @if (!empty($as))
                                                    <small style="color: rgb(172, 171, 171)">as</small>
                                                    <span style="font-size: 13px">{{ $as }}</span>
                                                @endif
                                            </div>
                                        </div>
                                    </div>
                                @endforeach
                                </div>
                              </div>
                              @foreach ($movie->actors->skip(3)->chunk(3) as $chunk)  
                                <div class="carousel-item">
                                  <div class="row">
                                    @foreach ($chunk as $actor)   
                                    <div class="col-md-4 mb-3">
                                      <div class="card" style="color: white;border: 1px solid rgb(70, 69, 69)">
                                        @if ($actor->image == 'not-found.jpg')
                                          <img src="/assets/img/blank.png" class="card-img-top" style="max-height: 200px; min-height: 200px">
                                        @else
                                          <img src="{{ $actor->image }}" class="card-img-top" style="max-height: 200px; min-height: 200px">
                                        @endif
                                          <div class="card-body bg-dark">
                                              @php
                                                  $as = explode(" as ", $actor->name);
                                                  $name = isset($as[0]) ? trim($as[0]) : $actor->name;
                                                  $as = isset($as[1]) ? trim($as[1]) : '';
                                              @endphp
                                              <h6 class="card-text">{{ $name }}</h6>
                                              @if (!empty($as))
                                                  <small style="color: rgb(172, 171, 171)">as</small>
                                                  <span style="font-size: 13px">{{ $as }}</span>
                                              @endif
                                          </div>
                                      </div>
                                  </div>
                                    @endforeach
                                  </div>
                                </div>
                              @endforeach
                            
                            </div>
                            <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleAutoplaying" data-bs-slide="prev">
                              <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                              <span class="visually-hidden">Previous</span>
                            </button>
                            <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleAutoplaying" data-bs-slide="next">
                              <span class="carousel-control-next-icon" aria-hidden="true"></span>
                              <span class="visually-hidden">Next</span>
                            </button>
                          </div>
        
                        </div>
                    </div>
                </div>
            </div>
            <!-- end left -->
            <div class="col-lg-4 mb-5">
                <div class="sidebar p-3" style="border: 1px solid rgb(70, 69, 69); background-color: rgb(28, 33, 46)">
                    <div class="toplists pb-3" style="color: white;">
                        <h3 style="border-bottom: 1px solid rgb(70, 69, 69) ; padding-bottom: 5px; ">Top List</h3>
                        @foreach ($movies as $mvs)
                        <div class="card bg-dark mb-3 mt-3" style="color: white;border: 1px solid rgb(70, 69, 69)">
                          <div class="row g-0">
                            <div class="col-md-4">
                              <img src="{{ asset('storage/' . $mvs->poster) }}" style="min-height: 200px; max-height: 150px" class="img-fluid rounded-start" alt="...">
                            </div>
                            <div class="col-md-8">
                              <div class="card-body">
                                <a href="/movies/{{ $mvs->slug }}"><h5 class="card-title">{{ $mvs->title }}</h5></a>
                                <p style="font-size: 14px"><i class="bi bi-stopwatch"></i> {{ $mvs->duration }}</p>
                                <p style="font-size: 15px">{{ implode(', ', $mvs->genres->pluck('name')->toArray()) }}</p>
                              </div>
                            </div>
                          </div>
                      </div>            
                        @endforeach     
                    </div>
                    <div class="recentNews" style="color: white;">
                        <h3 style="border-bottom: 1px solid rgb(70, 69, 69); padding-bottom: 5px; ">Recent News</h3>
                        @foreach ($news as $nws)
                        <div class="card bg-dark mb-3 mt-3" style="color: white; border: 1px solid rgb(70, 69, 69)">
                          <div class="row g-0">
                            <div class="col-md-4">
                              <img src="{{ asset('storage/' . $nws->image) }}" style="min-height: 170px" class="img-fluid rounded-start" alt="...">
                            </div>
                            <div class="col-md-8">
                              <div class="card-body">
                                <a href="/news/{{ $nws->slug }}"><h5 class="card-title">{{ $nws->title }}</h5></a>
                                <p class="card-text"><a href="/news?category={{ $nws->category->slug }}">{{ $nws->category->name }}</a></p>
                                <p><small style="color: gainsboro">{{ $nws->created_at->format('d, M Y') }}</small></p>
                              </div>
                            </div>
                          </div>
                          </div>
                    </div>
                    @endforeach
                </div>
                </div>
            </div>
        </div>
        <div class="container">

          <div class="row">
            <div class="review">
              <h3 style="border-bottom: 1px solid rgb(70, 69, 69); padding-bottom: 5px;">Review Section</h3>
              @if ($reviews->count()) 
                <div class="col-12">
                  <div class="user-review pt-3">
                    <div id="carouselExampleAutoplayingx" class="carousel slide" data-bs-ride="carousel">
                      <div class="carousel-inner" >
                        <div class="carousel-item active">
                          <div class="row">
                            @foreach ($reviews->take(3) as $review)
                            <div class="col-md-4 mb-3">
                              <div class="card" style="color: white;border: 1px solid rgb(70, 69, 69)">
                                <div class="card-body bg-dark">
                                  <p class="card-text">"{{ $review->review }}"</p>
                                  <div class="row">
                                    <div class="col-md-3">
                                      <img src="/assets/img/blank.png" class="rounded-circle img-fluid">
                                    </div>
                                    <div class="col-md-9">
                                      <h6><i class="fa fa-star check"></i>{{ $review->rating }}/10</h6>
                                      <p>Name : {{ $review->name }}</p>
                                    </div>
                                  </div>
                                  <small class="d-flex justify-content-end">{{ $review->created_at->format('D, d, M Y') }}</small>
                                </div>
                              </div>
                            </div>
                            @endforeach
                          </div>
                        </div>
                        @foreach ($reviews->skip(3)->chunk(3) as $chunk)
                          <div class="carousel-item">
                            <div class="row">
                              @foreach ($chunk as $review)
                                <div class="col-md-4 mb-3">
                                  <div class="card" style="color: white;border: 1px solid rgb(70, 69, 69)">
                                    <div class="card-body bg-dark">
                                      <p class="card-text">"{{ $review->review }}"</p>
                                      <div class="row">
                                        <div class="col-md-3">
                                          <img src="/assets/img/blank.png" class="rounded-circle img-fluid">
                                        </div>
                                        <div class="col-md-9">
                                          <h6><i class="fa fa-star check"></i>{{ $review->rating }}/10</h6>
                                          <p>Name : {{ $review->name }}</p>
                                        </div>
                                      </div>
                                      <small class="d-flex justify-content-end">{{ $review->created_at->format('D, d, M Y') }}</small>
                                    </div>
                                  </div>
                                </div>
                              @endforeach
                            </div>
                          </div>
                        @endforeach
  
                      </div>
                      <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleAutoplayingx" data-bs-slide="prev">
                      </button>
                      <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleAutoplayingx" data-bs-slide="next">
                      </button>
                    </div>
  
                  </div>
                </div>
              @else
                <div class="col-12">
                  <h4 class="d-flex justify-content-center p-5">There are no ratings for this film yet</h4>
                </div>
            @endif
  
          @php
          $existingReview = null;
            if (auth()->check()) {
              $existingReview = \App\Models\Review::where('user_id', auth()->user()->id)
                ->where('movie_id', $movie->id)
                ->first();
            }
          @endphp
          @if (auth()->guest() || !$existingReview)     
            <div class="col-lg-8 p-3 mt-4"  style="border: 1px solid rgb(70, 69, 69); border-radius: 5px">
              <h3>Review</h3>
              <form action="{{ route('review-movie', $movie->slug) }}" method="post">
                @csrf
                <input type="hidden" name="movie_id" value="{{ $movie->id}}">
                <input type="hidden" name="user_id" value="{{ auth()->user()->id ?? '' }}">
                <div class="mb-3">
                  <label class="form-label"><i class="bi bi-star-fill text-warning"></i> Rating</label>
                  <div class="input-group">
                    <select class="form-select" name="rating">
                      @for ($i = 1; $i < 11; $i++)
                        <option value="{{ $i }}">{{ $i }}</option>
                      @endfor
                    </select>
                  </div>
                </div>
                <div class="mb-3">
                  <label class="form-label">Your Review</label>
                  <div class="input-group">
                    <textarea name="review" class="form-control @error('review') is-invalid @enderror" placeholder="Enter your review..." required value="{{ old('review') }}" style="height: 150px"></textarea>
                    @error('review')
                      <div class="invalid-feedback">{{ $message }}</div>
                    @enderror
                  </div>
                </div>
                <div class="mb-3">
                  <label class="form-label">Enter Captcha</label>
                  {!! htmlFormSnippet() !!}
                  @error('g-recaptcha-response')
                    <span class="text-danger" role="alert">{{ $message }}</span>
                  @enderror
                </div> 
                <button type="submit" class="btn btn-primary">Submit</button>
              </form>
            </div>
          </div>
          @endif
          
  
            </div>
      </div>
        </div>
</section>

@endsection