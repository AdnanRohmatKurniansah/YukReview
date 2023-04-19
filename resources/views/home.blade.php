@extends('layout.main')

@section('content')

<div id="large-hero" class="large-header">
    <canvas id="demo-canvas"></canvas>
      <h1 class="main-title" style="font-size: 40px">Yuk Review</h1>
      <h5 class="sub-title d-flex justify-content-center align-items-center" style="position: absolute;
      margin: 0; padding: 0; color: #f9f1e9; text-align: center; top: 50%; left: 50%; -webkit-transform: translate3d(-50%,-50%,0); transform: translate3d(-50%,-50%,0);">YukReview is a film review system for the Indonesian people to support local movie production. This website provides information about films and television programs as well as their cast and crew.</h5>
  </div>

  <section class="content pt-5" id="content" style="background-image: url(assets/img/background/bg-1.png); background-repeat: no-repeat; background-size: cover;">
    <div class="movies">
        <div class="container">
            <h2 class="ps-3" style="border-left: 4px solid rgb(212, 212, 212); color: #fff;">Movies</h2>
            <div class="row mt-3">
              @foreach ($movies as $movie)
                <div class="col-md-4 mb-3">
                    <div class="card bg-transparent" style="border: 1px solid rgb(70, 69, 69)">
                      <a href="/movies/{{ $movie->slug }}">
                        <img src="{{ asset('storage/' . $movie->poster) }}" class="card-img-top" style="min-height: 400px; max-height: 400px">
                        <div class="card-body bg-dark" style="color: #fff">
                          <h5 class="card-text">{{ $movie->title }}</h5>
                          <p class="card-text"><i class="fa fa-star check"></i> {{ $movie->rating }}/10</p>
                        </div>
                      </a>
                      </div>
                </div>
              @endforeach
            </div>
        </div>
    </div>


    <div class="top=lists mt-5 pb-5">
        <div class="container">
            <h2 class="ps-3" style="border-left: 4px solid rgb(212, 212, 212); color: #fff;">Top Lists</h2>
            @php
                $lists = \App\Models\Movie::orderBy('rating', 'desc')->paginate(3)
            @endphp
            <div class="row mt-3">
              @foreach ($lists as $list)   
                <div class="col-md-4 mb-3">
                  <div class="card bg-transparent" style="border: 1px solid rgb(70, 69, 69)">
                    <a href="/movies/{{ $list->slug }}">
                      <img src="{{ asset('storage/' . $list->poster) }}" class="card-img-top" style="min-height: 400px; max-height: 400px">
                      <div class="card-body bg-dark" style="color: #fff">
                        <h5 class="card-text">{{ $list->title }}</h5>
                        <p class="card-text"><i class="fa fa-star check"></i> {{ $list->rating }}/10</p>
                      </div>
                    </a>
                    </div>
              </div>
              @endforeach
            </div>
        </div>
    </div>
  </section>
@endsection