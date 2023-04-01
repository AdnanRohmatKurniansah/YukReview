@extends('layout.main')

@section('content')
<section id="movies" style="background-color: rgb(19, 23, 34); padding-top: 100px; padding-bottom: 50px">
    <div class="container">
        <div class="row">
            <div class="col-lg-4">
                <div class="sidebar p-3" style="border: 1px solid rgb(70, 69, 69); background-color: rgb(28, 33, 46)">
                    <div class="genre pb-3" style="color: white;">
                        <h3 style="border-bottom: 1px solid rgb(70, 69, 69); padding-bottom: 5px; ">Categories</h3>
                        
                        <div class="row">
                          <div class="col-md-6">
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
                          <div class="form-check">
                              <input class="form-check-input" style="width: 20px; height: 19px;" type="checkbox" value="" id="flexCheckDefault">
                              <label class="form-check-label" style="font-size: 17px" for="flexCheckDefault">
                                Animation
                              </label>
                            </div>
                          <div class="form-check">
                              <input class="form-check-input" style="width: 20px; height: 19px;" type="checkbox" value="" id="flexCheckDefault">
                              <label class="form-check-label" style="font-size: 17px" for="flexCheckDefault">
                                Annimation
                              </label>
                            </div>
                          <div class="form-check">
                              <input class="form-check-input" style="width: 20px; height: 19px;" type="checkbox" value="" id="flexCheckDefault">
                              <label class="form-check-label" style="font-size: 17px" for="flexCheckDefault">
                                Biography
                              </label>
                            </div>
                          </div>
                          <div class="col-md-6">
                            <div class="form-check">
                              <input class="form-check-input" style="width: 20px; height: 19px;" type="checkbox" value="" id="flexCheckDefault">
                              <label class="form-check-label" style="font-size: 17px" for="flexCheckDefault">
                               Crime
                              </label>
                            </div>
                          <div class="form-check">
                              <input class="form-check-input" style="width: 20px; height: 19px;" type="checkbox" value="" id="flexCheckDefault">
                              <label class="form-check-label" style="font-size: 17px" for="flexCheckDefault">
                                Drama
                              </label>
                            </div>
                          <div class="form-check">
                              <input class="form-check-input" style="width: 20px; height: 19px;" type="checkbox" value="" id="flexCheckDefault">
                              <label class="form-check-label" style="font-size: 17px" for="flexCheckDefault">
                                Family
                              </label>
                            </div>  
                            <div class="form-check">
                              <input class="form-check-input" style="width: 20px; height: 19px;" type="checkbox" value="" id="flexCheckDefault">
                              <label class="form-check-label" style="font-size: 17px" for="flexCheckDefault">
                                Fantacy
                              </label>
                            </div>
                          <div class="form-check">
                              <input class="form-check-input" style="width: 20px; height: 19px;" type="checkbox" value="" id="flexCheckDefault">
                              <label class="form-check-label" style="font-size: 17px" for="flexCheckDefault">
                                History
                              </label>
                            </div> 
                          </div>
                        </div>

                    </div>
                    <div class="year" style="color: white">
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
                    </div>
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
                    <div class="row mt-4 pb-3" style="border-bottom: 1px solid rgb(70, 69, 69)">
                        <div class="col-md-3 mb-3">
                            <div class="card bg-transparent" style="border: 1px solid rgb(70, 69, 69)">
                              <a href="/movieDetail">
                                <img src="/assets/img/avenger.jpg" class="card-img-top" alt="...">
                                <div class="card-body bg-dark" style="color: #fff">
                                  <h6 class="card-text">Avengers End Game</h6>
                                  <p class="small card-text">Release : 24 April 2019</p>
                                </div>
                              </a>
                              </div>
                        </div>
                        <div class="col-md-3 mb-3">
                          <div class="card bg-transparent" style="border: 1px solid rgb(70, 69, 69)">
                            <a href="/movieDetail">
                              <img src="/assets/img/avenger.jpg" class="card-img-top" alt="...">
                              <div class="card-body bg-dark" style="color: #fff">
                                <h6 class="card-text">Avengers End Game</h6>
                                <p class="small card-text">Release : 24 April 2019</p>
                              </div>
                            </a>
                            </div>
                      </div>
                      <div class="col-md-3 mb-3">
                        <div class="card bg-transparent" style="border: 1px solid rgb(70, 69, 69)">
                          <a href="/movieDetail">
                            <img src="/assets/img/avenger.jpg" class="card-img-top" alt="...">
                            <div class="card-body bg-dark" style="color: #fff">
                              <h6 class="card-text">Avengers End Game</h6>
                              <p class="small card-text">Release : 24 April 2019</p>
                            </div>
                          </a>
                          </div>
                    </div>
                    <div class="col-md-3 mb-3">
                      <div class="card bg-transparent" style="border: 1px solid rgb(70, 69, 69)">
                        <a href="/movieDetail">
                          <img src="/assets/img/avenger.jpg" class="card-img-top" alt="...">
                          <div class="card-body bg-dark" style="color: #fff">
                            <h6 class="card-text">Avengers End Game</h6>
                            <p class="small card-text">Release : 24 April 2019</p>
                          </div>
                        </a>
                        </div>
                  </div>
                  <div class="col-md-3 mb-3">
                    <div class="card bg-transparent" style="border: 1px solid rgb(70, 69, 69)">
                      <a href="/movieDetail">
                        <img src="/assets/img/avenger.jpg" class="card-img-top" alt="...">
                        <div class="card-body bg-dark" style="color: #fff">
                          <h6 class="card-text">Avengers End Game</h6>
                          <p class="small card-text">Release : 24 April 2019</p>
                        </div>
                      </a>
                      </div>
                </div>
                <div class="col-md-3 mb-3">
                  <div class="card bg-transparent" style="border: 1px solid rgb(70, 69, 69)">
                    <a href="/movieDetail">
                      <img src="/assets/img/avenger.jpg" class="card-img-top" alt="...">
                      <div class="card-body bg-dark" style="color: #fff">
                        <h6 class="card-text">Avengers End Game</h6>
                        <p class="small card-text">Release : 24 April 2019</p>
                      </div>
                    </a>
                    </div>
              </div>
              <div class="col-md-3 mb-3">
                <div class="card bg-transparent" style="border: 1px solid rgb(70, 69, 69)">
                  <a href="/movieDetail">
                    <img src="/assets/img/avenger.jpg" class="card-img-top" alt="...">
                    <div class="card-body bg-dark" style="color: #fff">
                      <h6 class="card-text">Avengers End Game</h6>
                      <p class="small card-text">Release : 24 April 2019</p>
                    </div>
                  </a>
                  </div>
            </div>
            <div class="col-md-3 mb-3">
              <div class="card bg-transparent" style="border: 1px solid rgb(70, 69, 69)">
                <a href="/movieDetail">
                  <img src="/assets/img/avenger.jpg" class="card-img-top" alt="...">
                  <div class="card-body bg-dark" style="color: #fff">
                    <h6 class="card-text">Avengers End Game</h6>
                    <p class="small card-text">Release : 24 April 2019</p>
                  </div>
                </a>
                </div>
          </div>
                 </div>
                    <div class="paginate d-flex justify-content-center mt-4">
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
            </div>
        </div>
    </div>
</section>
@endsection