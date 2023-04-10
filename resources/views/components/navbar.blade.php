<!-- ======= Header ======= -->
<header id="header" class="header fixed-top d-flex align-items-center">
  <div class="container d-flex align-items-center justify-content-between">

    <a href="/" class="logo d-flex align-items-center me-auto me-lg-0">
      <!-- Uncomment the line below if you also wish to use an image logo -->
      <!-- <img src="assets/img/logo.png" alt=""> -->
      <h1>YukReview<span>.</span></h1>
    </a>

    <nav id="navbar" class="navbar">
      <ul>
        <li><a class="nav-link {{ Request::is('movies') || Request::is('movieDetail') ? 'active' : '' }}" href="/movies">Movies</a></li>
        <li><a class="nav-link {{ Request::is('toplists') ? 'active' : '' }}" href="/toplists">Top Lists</a></li>
        <li><a class="nav-link {{ Request::is('news') || Request::is('newsDetail') ? 'active' : '' }}" href="/news">News</a></li>
      </ul>
    </nav><!-- .navbar -->
    @auth
      <ul class="list-unstyled text-light">
        <li class="nav-item dropdown mt-3">
          <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
            Welcome back, {{ auth()->user()->username }}
          </a>
          <ul class="dropdown-menu  ">
            @php
                $user = Auth::user();
            @endphp
            @if ($user->role == 'admin')
              <li><a class="dropdown-item" href="/dashboard"><i class="bi bi-layout-text-sidebar-reverse"></i> My Dashboard</a></li>
            @else
              <li><a class="dropdown-item" href="#"><i class="bi bi-layout-text-sidebar-reverse"></i> My Profile</a></li>
            @endif
            <li><hr class="dropdown-divider"></li>
            <li>
              <form action="/auth/logout" method="post">
                @csrf
                <button type="submit" class="dropdown-item"><i class="bi bi-box-arrow-right"></i> Logout</button>
              </form>
            </li>
          </ul>
        </li>  
      </ul>
    @else
      <a class="btn-sign" href="/auth/login">Sign In</a>
    @endauth
    <i class="mobile-nav-toggle mobile-nav-show bi bi-list"></i>
    <i class="mobile-nav-toggle mobile-nav-hide d-none bi bi-x"></i>

  </div>
</header><!-- End Header -->