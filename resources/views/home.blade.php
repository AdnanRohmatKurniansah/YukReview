@extends('layout.main')

@section('content')

<div id="large-hero" class="large-header">
    <canvas id="demo-canvas"></canvas>
      <h1 class="main-title">Yuk Review</h1>
      <h6 class="sub-title d-flex justify-content-center align-items-center" style="position: absolute;
      margin: 0; padding: 0; color: #f9f1e9; text-align: center; top: 50%; left: 50%; -webkit-transform: translate3d(-50%,-50%,0); transform: translate3d(-50%,-50%,0);">YukReview is a film review system for the Indonesian people to support local movie production. This website provides information about films and television programs as well as their cast and crew.</h6>
  </div>


  <section class="content pt-5" id="content" style="background-image: url(assets/img/background/bg-1.png); background-repeat: no-repeat; background-size: cover;">
    <div class="movies">
        <div class="container">
            <h2 class="ps-3" style="border-left: 4px solid rgb(212, 212, 212); color: #fff;">Movies</h2>
            <div class="row mt-3">
                <div class="col-md-4 mb-3">
                    <div class="card bg-transparent" style="border: 1px solid rgb(70, 69, 69)">
                      <a href="/movieDetail">
                        <img src="/assets/img/avenger.jpg" class="card-img-top" alt="...">
                        <div class="card-body bg-dark" style="color: #fff">
                          <h5 class="card-text">Avengers End Game</h5>
                          <p class="card-text">Release : 24 April 2019</p>
                        </div>
                      </a>
                      </div>
                </div>
                <div class="col-md-4 mb-3">
                  <div class="card bg-transparent" style="border: 1px solid rgb(70, 69, 69)">
                    <a href="/movieDetail">
                      <img src="/assets/img/avenger.jpg" class="card-img-top" alt="...">
                      <div class="card-body bg-dark" style="color: #fff">
                        <h5 class="card-text">Avengers End Game</h5>
                        <p class="card-text">Release : 24 April 2019</p>
                      </div>
                    </a>
                    </div>
              </div>
              <div class="col-md-4 mb-3">
                <div class="card bg-transparent" style="border: 1px solid rgb(70, 69, 69)">
                  <a href="/movieDetail">
                    <img src="/assets/img/avenger.jpg" class="card-img-top" alt="...">
                    <div class="card-body bg-dark" style="color: #fff">
                      <h5 class="card-text">Avengers End Game</h5>
                      <p class="card-text">Release : 24 April 2019</p>
                    </div>
                  </a>
                  </div>
            </div>
            </div>
        </div>
    </div>


    <div class="top=lists mt-5 pb-5">
        <div class="container">
            <h2 class="ps-3" style="border-left: 4px solid rgb(212, 212, 212); color: #fff;">Top Lists</h2>
            <div class="row mt-3">
              <div class="col-md-4 mb-3">
                <div class="card bg-transparent" style="border: 1px solid rgb(70, 69, 69)">
                  <a href="/movieDetail">
                    <img src="/assets/img/avenger.jpg" class="card-img-top" alt="...">
                    <div class="card-body bg-dark" style="color: #fff">
                      <h5 class="card-text">Avengers End Game</h5>
                      <p class="card-text">Release : 24 April 2019</p>
                    </div>
                  </a>
                  </div>
            </div>
            <div class="col-md-4 mb-3">
              <div class="card bg-transparent" style="border: 1px solid rgb(70, 69, 69)">
                <a href="/movieDetail">
                  <img src="/assets/img/avenger.jpg" class="card-img-top" alt="...">
                  <div class="card-body bg-dark" style="color: #fff">
                    <h5 class="card-text">Avengers End Game</h5>
                    <p class="card-text">Release : 24 April 2019</p>
                  </div>
                </a>
                </div>
          </div>
          <div class="col-md-4 mb-3">
            <div class="card bg-transparent" style="border: 1px solid rgb(70, 69, 69)">
              <a href="/movieDetail">
                <img src="/assets/img/avenger.jpg" class="card-img-top" alt="...">
                <div class="card-body bg-dark" style="color: #fff">
                  <h5 class="card-text">Avengers End Game</h5>
                  <p class="card-text">Release : 24 April 2019</p>
                </div>
              </a>
              </div>
        </div>
            </div>
        </div>
    </div>
  </section>
@endsection