@extends('layout.main')

@section('content')
<section id="movies" style="background-color: rgb(19, 23, 34); padding-top: 100px; padding-bottom: 50px">
    <div class="container">
        <div class="row">
            <div class="col-lg-4">
                <div class="sidebar p-3" style="border: 1px solid rgb(70, 69, 69); background-color: rgb(28, 33, 46)">
                    <div class="genre pb-3" style="color: white;">
                        <h3 style="border-bottom: 1px solid rgb(70, 69, 69); padding-bottom: 5px; ">Genres</h3>
                        <div class="row">
                          <div class="col-md-6">
                            @for ($i = 0; $i < 6; $i++)
                              @if (isset($genres[$i]))
                                  <div class="form-check">
                                      <input class="form-check-input" type="checkbox" >
                                      <label class="form-check-label">
                                          {{ $genres[$i]->name }}
                                      </label>
                                  </div>
                              @endif
                          @endfor
                          </div>
                          <div class="col-md-6">
                            @foreach ($genres->skip(6) as $genre)
                              <div class="form-check">
                                <input class="form-check-input" type="checkbox" >
                                <label class="form-check-label">
                                    {{ $genre->name }}
                                </label>
                            </div>
                            @endforeach
                          </div>
                        </div>

                    </div>
                    {{-- <div class="year" style="color: white">
                        <h3 style="border-bottom: 1px solid rgb(70, 69, 69); padding-bottom: 5px">Movies by Year</h3>
                        <ul class="d-flex flex-wrap list-unstyled">
                          <li><label class="radio"> <input type="radio" name="year" value="" checked> <span style="color: #fff">1990</span> </label> </li>
                          <li><label class="radio"> <input type="radio" name="year" value=""> <span style="color: #fff">2000</span> </label> </li>
                          <li><label class="radio"> <input type="radio" name="year" value=""> <span style="color: #fff">2010</span> </label> </li>
                          <li><label class="radio"> <input type="radio" name="year" value=""> <span style="color: #fff">2012</span></label></li>
                          <li><label class="radio"> <input type="radio" name="year" value=""> <span style="color: #fff">2013</span> </label></li>
                          <li><label class="radio"> <input type="radio" name="year" value=""> <span style="color: #fff">2014</span> </label></li>
                          <li><label class="radio"> <input type="radio" name="year" value=""> <span style="color: #fff">2015</span></label></li>
                          <li><label class="radio"> <input type="radio" name="year" value=""> <span style="color: #fff">2016</span></label></li>
                          <li><label class="radio"> <input type="radio" name="year" value=""> <span style="color: #fff">2017</span></label></li>
                          <li><label class="radio"> <input type="radio" name="year" value=""> <span style="color: #fff">2018</span></label></li>
                        </ul> 
                    </div> --}}
                    <div class="rate" style="color: white">
                      <h3 style="border-bottom: 1px solid rgb(70, 69, 69); padding-bottom: 5px">Rating</h3>
                      <ul class="list-unstyled">
                        <li class="ten-star mb-2">
                          <a href="#">
                            <span class="fa fa-star checked"></span>
                            <span class="fa fa-star checked"></span>
                            <span class="fa fa-star checked"></span>
                            <span class="fa fa-star checked"></span>
                            <span class="fa fa-star checked"></span>
                            <span class="fa fa-star checked"></span>
                            <span class="fa fa-star checked"></span>
                            <span class="fa fa-star checked"></span>
                            <span class="fa fa-star checked"></span>
                            <span class="fa fa-star checked"></span>
                            <label>(2)</label>
                          </a>
                        </li>
                        <li class="nine-star mb-2">
                          <a href="#">
                            <span class="fa fa-star checked"></span>
                            <span class="fa fa-star checked"></span>
                            <span class="fa fa-star checked"></span>
                            <span class="fa fa-star checked"></span>
                            <span class="fa fa-star checked"></span>
                            <span class="fa fa-star checked"></span>
                            <span class="fa fa-star checked"></span>
                            <span class="fa fa-star checked"></span>
                            <span class="fa fa-star checked"></span>
                            <span class="fa fa-star"></span>
                            <label>(10)</label>
                          </a>
                        </li>
                        <li class="eight-star mb-2">
                          <a href="#">
                            <span class="fa fa-star checked"></span>
                            <span class="fa fa-star checked"></span>
                            <span class="fa fa-star checked"></span>
                            <span class="fa fa-star checked"></span>
                            <span class="fa fa-star checked"></span>
                            <span class="fa fa-star checked"></span>
                            <span class="fa fa-star checked"></span>
                            <span class="fa fa-star checked"></span>
                            <span class="fa fa-star"></span>
                            <span class="fa fa-star"></span>
                            <label>(27)</label>
                          </a>
                        </li>
                        <li class="seven-star mb-2">
                          <a href="#">
                            <span class="fa fa-star checked"></span>
                            <span class="fa fa-star checked"></span>
                            <span class="fa fa-star checked"></span>
                            <span class="fa fa-star checked"></span>
                            <span class="fa fa-star checked"></span>
                            <span class="fa fa-star checked"></span>
                            <span class="fa fa-star checked"></span>
                            <span class="fa fa-star"></span>
                            <span class="fa fa-star"></span>
                            <span class="fa fa-star"></span>
                            <label>(13)</label>
                          </a>
                        </li>
                        <li class="five-star mb-2">
                          <a href="#">
                            <span class="fa fa-star checked"></span>
                            <span class="fa fa-star checked"></span>
                            <span class="fa fa-star checked"></span>
                            <span class="fa fa-star checked"></span>
                            <span class="fa fa-star checked"></span>
                            <span class="fa fa-star"></span>
                            <span class="fa fa-star"></span>
                            <span class="fa fa-star"></span>
                            <span class="fa fa-star"></span>
                            <span class="fa fa-star"></span>
                            <label>(1)</label>
                          </a>
                        </li>
                      </ul>
                    </div>
                </div>
                  
            </div>
            <div class="col-lg-8">
                <div class="movies p-3" style="color: white; ">
                    <h2 style="border-bottom: 1px solid rgb(70, 69, 69); padding-bottom: 5px">Movies</h2>
                    @if ($movies->count())
                    <div class="row mt-4 pb-3" style="border-bottom: 1px solid rgb(70, 69, 69)">
                    @foreach ($movies as $movie)    
                      <div class="col-md-3 mb-3">
                        <div class="card bg-transparent" style="border: 1px solid rgb(70, 69, 69)">
                          <a href="/movies/{{ $movie->slug }}">
                            <img src="{{ asset('storage/' . $movie->poster) }}" class="card-img-top" alt="..." style="min-height: 200px; max-height: 200px">
                            <div class="card-body bg-dark" style="color: #fff">
                              <h6 class="card-text">{{ $movie->title }}</h6>
                              <p class="small card-text">Rating : {{ $movie->rating }}</p>
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