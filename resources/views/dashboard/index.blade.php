@extends('layout.dashboard')

@section('content')

<!-- Begin Page Content -->
<div class="container-fluid">

  <!-- Page Heading -->
  <div class="d-sm-flex align-items-center justify-content-between mb-4">
      <h1 class="h3 mb-0 text-gray-800">Dashboard</h1>
  </div>

  <!-- Content Row -->
  <div class="row">

      <!-- Earnings (Monthly) Card Example -->
      <div class="col-xl-3 col-md-6 mb-4">
          <div class="card border-left-primary shadow h-100 py-2">
              <div class="card-body">
                  <div class="row no-gutters align-items-center">
                      <div class="col mr-2">
                        @php
                            $movies = \App\Models\Movie::count();
                        @endphp
                          <div class="text-xs font-weight-bold text-primary text-uppercase mb-1">
                              Movies</div>
                          <div class="h5 mb-0 font-weight-bold text-gray-800">{{ $movies }}</div>
                      </div>
                      <div class="col-auto">
                          <i class="fa-sharp fa-solid fa-film fa-2x text-gray-300"></i>
                      </div>
                  </div>
              </div>
          </div>
      </div>

      <!-- Earnings (Monthly) Card Example -->
      <div class="col-xl-3 col-md-6 mb-4">
          <div class="card border-left-success shadow h-100 py-2">
              <div class="card-body">
                  <div class="row no-gutters align-items-center">
                      <div class="col mr-2">
                        @php
                            $news = \App\Models\News::count();
                        @endphp
                          <div class="text-xs font-weight-bold text-success text-uppercase mb-1">
                              News</div>
                          <div class="h5 mb-0 font-weight-bold text-gray-800">{{ $news }}</div>
                      </div>
                      <div class="col-auto">
                          <i class="fa-sharp fa-solid fa-newspaper fa-2x text-gray-300"></i>
                      </div>
                  </div>
              </div>
          </div>
      </div>

      <!-- Earnings (Monthly) Card Example -->
      <div class="col-xl-3 col-md-6 mb-4">
          <div class="card border-left-info shadow h-100 py-2">
              <div class="card-body">
                  <div class="row no-gutters align-items-center">
                      <div class="col mr-2">
                        @php
                            $user = \App\Models\User::count();
                        @endphp
                          <div class="text-xs font-weight-bold text-info text-uppercase mb-1">Users
                          </div>
                        <div class="h5 mb-0 font-weight-bold text-gray-800">{{ $user }}</div>
                      </div>
                      <div class="col-auto">
                          <i class="fa-solid fa-users fa-2x text-gray-300"></i>
                      </div>
                  </div>
              </div>
          </div>
      </div>

      <!-- Pending Requests Card Example -->
      <div class="col-xl-3 col-md-6 mb-4">
          <div class="card border-left-warning shadow h-100 py-2">
              <div class="card-body">
                  <div class="row no-gutters align-items-center">
                      <div class="col mr-2">
                        @php
                            $review = \App\Models\Review::count();
                        @endphp
                          <div class="text-xs font-weight-bold text-warning text-uppercase mb-1">
                              Reviews</div>
                          <div class="h5 mb-0 font-weight-bold text-gray-800">{{ $review }}</div>
                      </div>
                      <div class="col-auto">
                          <i class="fas fa-comments fa-2x text-gray-300"></i>
                      </div>
                  </div>
              </div>
          </div>
      </div>
  </div>

</div>
<!-- /.container-fluid -->

@endsection