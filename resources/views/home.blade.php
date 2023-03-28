@extends('layout.main')

@section('content')

<div id="large-hero" class="large-header">
    <canvas id="demo-canvas"></canvas>
      <h1 class="main-title">Yuk Review<br><span class="thin">YukReview is a film review system for the Indonesian people to support local movie production. This website provides information about films and television programs as well as their cast and crew.</span></h1>
  </div>


  <section class="content pt-5" id="content" style="background-image: url(assets/img/background/bg-1.png); background-repeat: no-repeat; background-size: cover;">
    <div class="movies">
        <div class="container">
            <h1 class="ps-3" style="border-left: 4px solid #fff; color: #fff;">Movies</h1>
            <div class="row mt-3">
                <div class="col-md-4">
                    <div class="card bg-transparent border-light">
                      <a href="">
                        <img src="/assets/img/avenger.jpg" class="card-img-top" alt="...">
                        <div class="card-body bg-dark" style="color: #fff">
                          <h5 class="card-text">Avengers End Game</h5>
                          <p class="card-text">Release : 24 April 2019</p>
                        </div>
                      </a>
                      </div>
                </div>
                <div class="col-md-4">
                  <div class="card bg-transparent border-light">
                    <a href="">
                      <img src="/assets/img/avenger.jpg" class="card-img-top" alt="...">
                      <div class="card-body bg-dark" style="color: #fff">
                        <h5 class="card-text">Avengers End Game</h5>
                        <p class="card-text">Release : 24 April 2019</p>
                      </div>
                    </a>
                    </div>
              </div>
              <div class="col-md-4">
                <div class="card bg-transparent border-light">
                  <a href="">
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
            <h1 class="ps-3" style="border-left: 4px solid #fff; color: #fff;">Top Lists</h1>
            <div class="row mt-3">
              <div class="col-md-4">
                <div class="card bg-transparent border-light">
                  <a href="">
                    <img src="/assets/img/avenger.jpg" class="card-img-top" alt="...">
                    <div class="card-body bg-dark" style="color: #fff">
                      <h5 class="card-text">Avengers End Game</h5>
                      <p class="card-text">Release : 24 April 2019</p>
                    </div>
                  </a>
                  </div>
            </div>
            <div class="col-md-4">
              <div class="card bg-transparent border-light">
                <a href="">
                  <img src="/assets/img/avenger.jpg" class="card-img-top" alt="...">
                  <div class="card-body bg-dark" style="color: #fff">
                    <h5 class="card-text">Avengers End Game</h5>
                    <p class="card-text">Release : 24 April 2019</p>
                  </div>
                </a>
                </div>
          </div>
          <div class="col-md-4">
            <div class="card bg-transparent border-light">
              <a href="">
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