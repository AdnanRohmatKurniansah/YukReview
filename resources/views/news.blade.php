@extends('layout.main')

@section('content')
<section id="news" style="background-color: rgb(28, 33, 46); padding-top: 100px">
  <div class="container">
      <div class="row">
        @if ($news->count())
        <div class="col-lg-8">
          <div class="card bg-dark mb-5" style="color: white;border: 1px solid rgb(70, 69, 69)">
              <img src="{{ asset('storage/' . $news[0]->image) }}" class="card-img-top" alt="..." style="max-height: 350px">
              <div class="card-body">
                <a href="/newsDetail/{{ $news[0]->slug }}"><h5 class="card-title">{{ $news[0]->title }}</h5></a>
                <p class="card-text"><a href="/news?category={{ $news[0]->category->slug }}">{{ $news[0]->category->name }}</a>  . <small style="color: gainsboro">{{ $news[0]->created_at->format('d, M Y') }}</small></p>
                <p class="excerpt card-text">{{ $news[0]->excerpt }}</p>
              </div>
            </div>
            @foreach ($news->skip(1) as $nws)   
              <div class="card bg-dark mb-3" style="color: white;border: 1px solid rgb(70, 69, 69)">
                <div class="row g-0">
                  <div class="col-md-4">
                    <img src="{{ asset('storage/' . $nws->image) }}" class="img-fluid rounded-start" alt="..." style="min-height: 200px">
                  </div>
                  <div class="col-md-8">
                    <div class="card-body">
                      <a href="/newsDetail/{{ $nws->slug }}"><h5 class="card-title">{{ $nws->title }}</h5></a>
                      <p class="card-text"><a href="/news?category={{ $nws->category->slug }}">{{ $nws->category->name }}</a>  . <small style="color: gainsboro">{{ $nws->created_at->format('d, M Y') }}</small></p>
                    <p class="excerpt card-text">{{ $nws->excerpt }}.</p>
                    </div>
                  </div>
                </div>
              </div>
            @endforeach
      </div>
        @else
          <p>No Movies Found</p>
        @endif
        <div class="col-lg-4 mt-3">
          <div class="input-group mb-3">
              <input type="text" class="form-control" placeholder="Search..." aria-label="Recipient's username" aria-describedby="button-addon2">
              <button class="btn btn-primary" type="button" id="button-addon2"><i class="bi bi-search"></i></button>
            </div>
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
                        <div class="card bg-dark mb-3 mt-3" style="color: white; border: 1px solid rgb(70, 69, 69)">
                            <div class="row g-0">
                              <div class="col-md-4">
                                <img src="/assets/img/avenger.jpg" style="min-height: 150px" class="img-fluid rounded-start" alt="...">
                              </div>
                              <div class="col-md-8">
                                <div class="card-body">
                                  <a href="/movieDetail"><h5 class="card-title">Avenger End Game</h5></a>
                                  <p style="font-size: 14px"><i class="bi bi-stopwatch"></i> 02 hours 30 minutes</p>
                                  <p style="font-size: 15px">Comic, Magic</p>
                                </div>
                              </div>
                            </div>
                          </div>
                        <div class="card bg-dark mb-3 mt-3" style="color: white;border: 1px solid rgb(70, 69, 69)">
                            <div class="row g-0">
                              <div class="col-md-4">
                                <img src="/assets/img/avenger.jpg" style="min-height: 150px" class="img-fluid rounded-start" alt="...">
                              </div>
                              <div class="col-md-8">
                                <div class="card-body">
                                  <a href="/movieDetail"><h5 class="card-title">Avenger End Game</h5></a>
                                  <p style="font-size: 14px"><i class="bi bi-stopwatch"></i> 02 hours 30 minutes</p>
                                  <p style="font-size: 15px">Comic, Magic</p>
                                </div>
                              </div>
                            </div>
                          </div>
                        <div class="card bg-dark mb-3 mt-3" style="color: white;border: 1px solid rgb(70, 69, 69)">
                            <div class="row g-0">
                              <div class="col-md-4">
                                <img src="/assets/img/avenger.jpg" style="min-height: 150px" class="img-fluid rounded-start" alt="...">
                              </div>
                              <div class="col-md-8">
                                <div class="card-body">
                                  <a href="/movieDetail"><h5 class="card-title">Avenger End Game</h5></a>
                                  <p style="font-size: 14px"><i class="bi bi-stopwatch"></i> 02 hours 30 minutes</p>
                                  <p style="font-size: 15px">Comic, Magic</p>
                                </div>
                              </div>
                            </div>
                          </div>
                        
                        </div>
                  </div>
              </div>
          </div>
          <div class="paginate d-flex justify-content-center mt-4 pb-5">
            <nav aria-label="Page navigation example">
              <ul class="pagination ">
                <li class="page-item">
                  <a class="page-link bg-dark text-light" href="#" aria-label="Previous">
                    <span aria-hidden="true">&laquo;</span>
                  </a>
                </li>
                <li class="page-item"><a class="page-link bg-dark text-light" href="#">1</a></li>
                <li class="page-item"><a class="page-link bg-dark text-light" href="#">2</a></li>
                <li class="page-item"><a class="page-link bg-dark text-light" href="#">3</a></li>
                <li class="page-item">
                  <a class="page-link bg-dark text-light" href="#" aria-label="Next">
                    <span aria-hidden="true">&raquo;</span>
                  </a>
                </li>
              </ul>
            </nav>
          </div>
      </div>
</section>
@endsection