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

    <a class="btn-sign" href="#">Sign In</a>
    <i class="mobile-nav-toggle mobile-nav-show bi bi-list"></i>
    <i class="mobile-nav-toggle mobile-nav-hide d-none bi bi-x"></i>

  </div>
</header><!-- End Header -->