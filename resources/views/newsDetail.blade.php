@extends('layout.main')

@section('content')
<section id="news" style="background-color: rgb(28, 33, 46); padding-top: 100px">
  <div class="container">
      <div class="row">
          <div class="col-lg-8">
              <div class="card bg-dark mb-5" style="color: white;border: 1px solid rgb(70, 69, 69)">
                  <img src="{{ asset('storage/' . $news->image) }}" class="card-img-top" alt="..." style="max-height: 350px">
                  <div class="card-body">
                    <a href="/news/{{ $news->slug }}"><h5 class="card-title">{{ $news->title }}</h5></a>
                    <p class="card-text"><a href="/news?category={{ $news->category->slug }}">{{ $news->category->name }}</a>  . <small style="color: gainsboro">{{ $news->created_at->format('d, M Y') }}</small></p>
                    <p class="card-text">{!! $news->body !!}</p>
                  </div>
                </div>
          </div>
          <div class="col-lg-4 mt-3">
            <form action="/news">
              <div class="input-group mb-3">
                  <input type="text" class="form-control" name="search" placeholder="Search..." aria-label="Recipient's username" value="{{ request('search') }}">
                  <button class="btn btn-primary" type="submit"><i class="bi bi-search"></i></button>
                </div>
            </form>
              <div class="hotNews pb-3" style="color: #fff;">
                  <h3 style="border-bottom: 1px solid rgb(70, 69, 69); padding-bottom: 5px; ">What's hot</h3>
                  <div class="card bg-dark mb-3 mt-3" style="color: white;border: 1px solid rgb(70, 69, 69)">
                    <div class="row g-0">
                      <div class="col-md-4">
                        <img src="/assets/img/news/news-1.jpg" style="min-height: 170px" class="img-fluid rounded-start" alt="...">
                      </div>
                      <div class="col-md-8">
                        <div class="card-body">
                          <a href="/newsDetail"><h5 class="card-title">World Starts With Word Peace</h5></a>
                          <p class="card-text"><a href="">TV Rumors</a></p>
                          <p><small style="color: gainsboro">February 5, 2019</small></p>
                        </div>
                      </div>
                    </div>
                    </div>
                    <div class="card bg-dark mb-3 mt-3" style="color: white;border: 1px solid rgb(70, 69, 69)">
                      <div class="row g-0">
                        <div class="col-md-4">
                          <img src="/assets/img/news/news-1.jpg" style="min-height: 170px" class="img-fluid rounded-start" alt="...">
                        </div>
                        <div class="col-md-8">
                          <div class="card-body">
                            <a href="/newsDetail"><h5 class="card-title">World Starts With Word Peace</h5></a>
                            <p class="card-text"><a href="">TV Rumors</a></p>
                            <p><small style="color: gainsboro">February 5, 2019</small></p>
                          </div>
                        </div>
                      </div>
                      </div>
                      <div class="toplists pb-3" style="color: white;">
                        <h3 style="border-bottom: 1px solid rgb(70, 69, 69) ; padding-bottom: 5px; ">Top List</h3>
                        @foreach ($movies as $movie)
                          <div class="card bg-dark mb-3 mt-3" style="color: white; border: 1px solid rgb(70, 69, 69)">
                              <div class="row g-0">
                                <div class="col-md-4">
                                  <img src="{{ asset('storage/' . $movie->poster) }}" style="min-height: 200px; max-height: 150px" class="img-fluid rounded-start" alt="...">
                                </div>
                                <div class="col-md-8">
                                  <div class="card-body">
                                    <a href="/movies/{{ $movie->slug }}"><h5 class="card-title">{{ $movie->title }}</h5></a>
                                    <p style="font-size: 14px"><i class="bi bi-stopwatch"></i> {{ $movie->duration }}</p>
                                    <p style="font-size: 15px">{{ implode(', ', $movie->genres->pluck('name')->toArray()) }}</p>
                                  </div>
                                </div>
                              </div>
                            </div>
                        @endforeach
                      </div>
                  </div>
              </div>
          </div>
</section>
@endsection






