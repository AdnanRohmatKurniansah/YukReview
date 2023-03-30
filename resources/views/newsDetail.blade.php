@extends('layout.main')

@section('content')
<div class="container" style="margin-top: 130px">
    <div class="row">
        <div class="col-lg-8">
            <div class="card mb-5">
                <img src="/assets/img/news/news-1.jpg" class="card-img-top" alt="..." style="max-height: 350px">
                <div class="card-body">
                  <h3 class="card-title">World Starts With Word Peace</h3>
                  <p class="card-text"><a href="" style="color: blue">Tennis, TV Rumors</a>  . <small class="text-body-secondary">February 5, 2019</small></p>
                  <p class="excerpt card-text">Praesent iaculis, purus ac vehicula mattis, arcu lorem blandit nisl, non laoreet dui mi eget elit. Donec porttitor ex vel augue maximus luctus. Vivamus finibus nibh eu nunc volutpat suscipit.</p>
                  <p class="card-text">Lorem ipsum dolor sit, amet consectetur adipisicing elit. Iste cumque eum facilis? Harum assumenda natus rerum. Ut voluptas quae illo reiciendis id? Optio quos eum sint iste nulla velit quasi, corporis reiciendis sequi, ipsam excepturi accusantium fuga asperiores quibusdam provident possimus pariatur laboriosam ratione incidunt non atque harum. Modi libero nesciunt saepe placeat, tempora optio pariatur in error sit maiores voluptates cum dicta, rem numquam esse veniam debitis cupiditate. Sit veniam consequuntur sed, praesentium sint aliquid dignissimos, perferendis odio non rem eius labore nostrum corporis neque saepe voluptates quisquam! Non, doloribus iure! Odit, magni eius! Velit asperiores eveniet a placeat.</p>
                  <p class="card-text">Lorem ipsum dolor sit amet consectetur adipisicing elit. Laborum neque non ab, ipsum, iusto enim magni voluptatibus at consectetur esse architecto reiciendis aliquid harum fuga iure saepe explicabo beatae voluptate quisquam a maxime veritatis. Delectus ipsum ullam nam mollitia fugit dolores eius similique dicta laborum id. Voluptatem ipsa vero voluptatum.</p>
                  <p class="card-text">Lorem ipsum dolor sit, amet consectetur adipisicing elit. Iste cumque eum facilis? Harum assumenda natus rerum. Ut voluptas quae illo reiciendis id? Optio quos eum sint iste nulla velit quasi, corporis reiciendis sequi, ipsam excepturi accusantium fuga asperiores quibusdam provident possimus pariatur laboriosam ratione incidunt non atque harum. Modi libero nesciunt saepe placeat, tempora optio pariatur in error sit maiores voluptates cum dicta, rem numquam esse veniam debitis cupiditate. Sit veniam consequuntur sed, praesentium sint aliquid dignissimos, perferendis odio non rem eius labore nostrum corporis neque saepe voluptates quisquam! Non, doloribus iure! Odit, magni eius! Velit asperiores eveniet a placeat.</p>
                </div>
              </div>

        </div>
        <div class="col-lg-4 mt-3">
            <div class="input-group mb-3">
                <input type="text" class="form-control" placeholder="Search..." aria-label="Recipient's username" aria-describedby="button-addon2">
                <button class="btn btn-primary" type="button" id="button-addon2"><i class="bi bi-search"></i></button>
              </div>
            <div class="hotNews pb-3" style="color: black;">
                <h3 style="border-bottom: 1px solid rgb(212, 212, 212); padding-bottom: 5px; ">What's hot</h3>
                    
                    <div class="card mb-3" style="max-width: 540px;">
                        <div class="row g-0">
                          <div class="col-md-4">
                            <img src="/assets/img/news/news-1.jpg" style="min-height: 170px" class="img-fluid rounded-start" alt="...">
                          </div>
                          <div class="col-md-8">
                            <div class="card-body">
                              <h5 class="card-title">World Starts With Word Peace</h5>
                              <p class="card-text"><a href="" style="color: blue">Tennis, TV Rumors</a></p>
                              <p><small class="text-body-secondary">February 5, 2019</small></p>
                            </div>
                          </div>
                        </div>
                      </div>
                      <div class="card mb-3" style="max-width: 540px;">
                        <div class="row g-0">
                          <div class="col-md-4">
                            <img src="/assets/img/news/news-1.jpg" style="min-height: 170px" class="img-fluid rounded-start" alt="...">
                          </div>
                          <div class="col-md-8">
                            <div class="card-body">
                              <h5 class="card-title">World Starts With Word Peace</h5>
                              <p class="card-text"><a href="" style="color: blue">Tennis, TV Rumors</a></p>
                              <p><small class="text-body-secondary">February 5, 2019</small></p>
                            </div>
                          </div>
                        </div>
                      </div>
                      <div class="toplists pb-3" >
                        <h3 style="border-bottom: 1px solid rgb(212, 212, 212); padding-bottom: 5px; ">Top List</h3>
                            <div class="card mb-3" style="max-width: 540px;">
                                <div class="row g-0">
                                  <div class="col-md-4">
                                    <img src="/assets/img/avenger.jpg" style="min-height: 150px" class="img-fluid rounded-start" alt="...">
                                  </div>
                                  <div class="col-md-8">
                                    <div class="card-body">
                                      <h5 class="card-title">Avenger End Game</h5>
                                      <p style="font-size: 14px"><i class="bi bi-stopwatch"></i> 02 hours 30 minutes</p>
                                      <p style="font-size: 15px">Comic, Magic</p>
                                    </div>
                                  </div>
                                </div>
                              </div>
                            <div class="card mb-3" style="max-width: 540px;">
                                <div class="row g-0">
                                  <div class="col-md-4">
                                    <img src="/assets/img/avenger.jpg" style="min-height: 150px" class="img-fluid rounded-start" alt="...">
                                  </div>
                                  <div class="col-md-8">
                                    <div class="card-body">
                                      <h5 class="card-title">Avenger End Game</h5>
                                      <p style="font-size: 14px"><i class="bi bi-stopwatch"></i> 02 hours 30 minutes</p>
                                      <p style="font-size: 15px">Comic, Magic</p>
                                    </div>
                                  </div>
                                </div>
                              </div>
                            <div class="card mb-3" style="max-width: 540px;">
                                <div class="row g-0">
                                  <div class="col-md-4">
                                    <img src="/assets/img/avenger.jpg" style="min-height: 150px" class="img-fluid rounded-start" alt="...">
                                  </div>
                                  <div class="col-md-8">
                                    <div class="card-body">
                                      <h5 class="card-title">Avenger End Game</h5>
                                      <p style="font-size: 14px"><i class="bi bi-stopwatch"></i> 02 hours 30 minutes</p>
                                      <p style="font-size: 15px">Comic, Magic</p>
                                    </div>
                                  </div>
                                </div>
                              </div>
                            <div class="card mb-3" style="max-width: 540px;">
                                <div class="row g-0">
                                  <div class="col-md-4">
                                    <img src="/assets/img/avenger.jpg" style="min-height: 150px" class="img-fluid rounded-start" alt="...">
                                  </div>
                                  <div class="col-md-8">
                                    <div class="card-body">
                                      <h5 class="card-title">Avenger End Game</h5>
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
    
</div>
@endsection