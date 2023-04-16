@extends('layout.main')

@section('content')
<section id="movieDetail"  style="background-color: rgb(19, 23, 34); color: #fff; padding-bottom: 100px">
    <div class="container">
        <div class="trailer col-12 pt-5">
            <iframe class="d-flex justify-content-center mt-5 mb-3" width="100%" height="400" src="{{ $movie->trailer }}">
            </iframe>
        </div>
        <div class="row mt-5">
            <!-- left -->
            <div class="col-lg-8 mb-5">
                <div class="row">
                    <div class="col-md-4">
                        <div class="card" style="border: 1px solid rgb(70, 69, 69)">
                            <img src="{{ asset('storage/' . $movie->poster) }}" class="card-img" alt="..." style="min-height: 300px">
                          </div>
                    </div>
                    <div class="col-md-8">
                        <h3 class="movie-title">{{ $movie->title }}</h3>
                        <div class="movie-info">
                            <p>Duration: <i class="bi bi-stopwatch"></i> {{ $movie->duration }}</p>
                            <ul class="list-unstyled">
                                <li><b>Genre :</b> {{ implode(', ', $movie->genres->pluck('name')->toArray()) }}</li>
                                <li><b>Rating :</b> {{ $movie->rating }}/10</li>
                                <li><b>Release :</b> {{ $movie->year }}</li>
                            </ul>
                        </div>
                        <div class="rate">
                          <h5 class="mt-5">Your Rating</h5>
                          <button type="button" class="btn btn-dark"><i class="fa fa-star checked"></i> Rate</button>
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
                                  <div class="col-md-4 mb-3">
                                    <div class="card" style="color: white;border: 1px solid rgb(70, 69, 69)">
                                      <img src="/assets/img/blank.png" class="card-img-top" alt="...">
                                      <div class="card-body bg-dark">
                                        <p class="card-text">Name : Lorem ipsum dolor sit amet consectetur.</p>
                                      </div>
                                    </div>
                                  </div>
                                  <div class="col-md-4 mb-3">
                                    <div class="card" style="color: white;border: 1px solid rgb(70, 69, 69)">
                                      <img src="/assets/img/blank.png" class="card-img-top" alt="...">
                                      <div class="card-body bg-dark">
                                        <p class="card-text">Name : Lorem ipsum dolor sit amet consectetur.</p>
                                      </div>
                                    </div>
                                  </div>
                                  <div class="col-md-4 mb-3">
                                    <div class="card" style="color: white;border: 1px solid rgb(70, 69, 69)">
                                      <img src="/assets/img/blank.png" class="card-img-top" alt="...">
                                      <div class="card-body bg-dark">
                                        <p class="card-text">Name : Lorem ipsum dolor sit amet consectetur.</p>
                                      </div>
                                    </div>
                                  </div>
                                </div>
                              </div>
                              <div class="carousel-item">
                                <div class="row">
                                  <div class="col-md-4 mb-3">
                                    <div class="card" style="color: white;border: 1px solid rgb(70, 69, 69)">
                                      <img src="/assets/img/blank.png" class="card-img-top" alt="...">
                                      <div class="card-body bg-dark">
                                        <p class="card-text">Name : Lorem ipsum dolor sit amet consectetur.</p>
                                      </div>
                                    </div>
                                  </div>
                                  <div class="col-md-4 mb-3">
                                    <div class="card" style="color: white;border: 1px solid rgb(70, 69, 69)">
                                      <img src="/assets/img/blank.png" class="card-img-top" alt="...">
                                      <div class="card-body bg-dark">
                                        <p class="card-text">Name : Lorem ipsum dolor sit amet consectetur.</p>
                                      </div>
                                    </div>
                                  </div>
                                  <div class="col-md-4 mb-3">
                                    <div class="card" style="color: white;border: 1px solid rgb(70, 69, 69)">
                                      <img src="/assets/img/blank.png" class="card-img-top" alt="...">
                                      <div class="card-body bg-dark">
                                        <p class="card-text">Name : Lorem ipsum dolor sit amet consectetur.</p>
                                      </div>
                                    </div>
                                  </div>
                                </div>
                              </div>
                              <div class="carousel-item">
                                <div class="row">
                                  <div class="col-md-4 mb-3">
                                    <div class="card" style="color: white;border: 1px solid rgb(70, 69, 69)">
                                      <img src="/assets/img/blank.png" class="card-img-top" alt="...">
                                      <div class="card-body bg-dark">
                                        <p class="card-text">Name : Lorem ipsum dolor sit amet consectetur.</p>
                                      </div>
                                    </div>
                                  </div>
                                  <div class="col-md-4 mb-3">
                                    <div class="card" style="color: white;border: 1px solid rgb(70, 69, 69)">
                                      <img src="/assets/img/blank.png" class="card-img-top" alt="...">
                                      <div class="card-body bg-dark">
                                        <p class="card-text">Name : Lorem ipsum dolor sit amet consectetur.</p>
                                      </div>
                                    </div>
                                  </div>
                                  <div class="col-md-4 mb-3">
                                    <div class="card" style="color: white;border: 1px solid rgb(70, 69, 69)">
                                      <img src="/assets/img/blank.png" class="card-img-top" alt="...">
                                      <div class="card-body bg-dark">
                                        <p class="card-text">Name : Lorem ipsum dolor sit amet consectetur.</p>
                                      </div>
                                    </div>
                                  </div>
                                </div>
                              </div>
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
                              <img src="{{ asset('storage/' . $mvs->poster) }}" style="min-height: 150px" class="img-fluid rounded-start" alt="...">
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
    </div>
</section>

@endsection