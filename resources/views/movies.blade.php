@extends('layout.main')

@section('content')
<section id="movies" style="background-color: blue; padding-top: 100px">
    <div class="container">
        <div class="row">
            <div class="col-lg-4">
                <div class="sidebar p-3" style="border: 1px solid rgb(212, 212, 212); box-shadow: 0px 2px 2px rgba(1, 41, 112, 0.1)">
                    <div class="genre pb-3">
                        <h3 style="border-bottom: 1px solid rgb(212, 212, 212); padding-bottom: 5px">Categories</h3>
                    
                        <div class="form-check">
                            <input class="form-check-input" style="width: 20px; height: 19px;" type="checkbox" value="" id="flexCheckDefault">
                            <label class="form-check-label" style="font-size: 17px" for="flexCheckDefault">
                              Adventure
                            </label>
                          </div>
                        <div class="form-check">
                            <input class="form-check-input" style="width: 20px; height: 19px;" type="checkbox" value="" id="flexCheckDefault">
                            <label class="form-check-label" style="font-size: 17px" for="flexCheckDefault">
                              Comedy
                            </label>
                          </div>
                        <div class="form-check">
                            <input class="form-check-input" style="width: 20px; height: 19px;" type="checkbox" value="" id="flexCheckDefault">
                            <label class="form-check-label" style="font-size: 17px" for="flexCheckDefault">
                              Action
                            </label>
                          </div>
                    </div>
                    <div class="year">
                        <h3 style="border-bottom: 1px solid rgb(212, 212, 212); padding-bottom: 5px">Movies by Year</h3>
                    </div>
                    <div class="form-check">
                        <input class="bg-primary border-0" type="button" value="2022">
                      </div>
                </div>
            </div>
            <div class="col-lg-8">
                <div class="movies p-3" style="border: 1px solid whitesmoke">
                    <h2 style="border-bottom: 1px solid rgb(212, 212, 212); padding-bottom: 5px">Movies</h2>
                    <div class="row">
                        <div class="col-md-3">
                            <div class="card bg-transparent border-light">
                                <img src="/assets/img/avenger.jpg" class="card-img-top" alt="...">
                                <div class="card-body bg-dark" style="color: #fff">
                                  <h6 class="card-text">Avengers End Game</h6>
                                  <p class="small card-text">Release : 24 April 2019</p>
                                </div>
                              </div>
                        </div>
                        <div class="col-md-3">
                            <div class="card bg-transparent border-light">
                                <img src="/assets/img/avenger.jpg" class="card-img-top" alt="...">
                                <div class="card-body bg-dark" style="color: #fff">
                                  <h6 class="card-text">Avengers End Game</h6>
                                  <p class="small card-text">Release : 24 April 2019</p>
                                </div>
                              </div>
                        </div>
                        <div class="col-md-3">
                            <div class="card bg-transparent border-light">
                                <img src="/assets/img/avenger.jpg" class="card-img-top" alt="...">
                                <div class="card-body bg-dark" style="color: #fff">
                                  <h6 class="card-text">Avengers End Game</h6>
                                  <p class="small card-text">Release : 24 April 2019</p>
                                </div>
                              </div>
                        </div>
                        <div class="col-md-3">
                            <div class="card bg-transparent border-light">
                                <img src="/assets/img/avenger.jpg" class="card-img-top" alt="...">
                                <div class="card-body bg-dark" style="color: #fff">
                                  <h6 class="card-text">Avengers End Game</h6>
                                  <p class="small card-text">Release : 24 April 2019</p>
                                </div>
                              </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
@endsection