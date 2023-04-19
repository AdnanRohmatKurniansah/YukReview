<!-- Sidebar -->
<ul class="navbar-nav bg-gradient-primary sidebar sidebar-dark accordion" id="accordionSidebar">

  <!-- Sidebar - Brand -->
  <a class="sidebar-brand d-flex align-items-center justify-content-center" href="/">
      <div class="sidebar-brand-icon rotate-n-15">
          <i class="fas fa-film"></i>
      </div>
      <div class="sidebar-brand-text mx-3">YukReview</div>
  </a>

  <!-- Divider -->
  <hr class="sidebar-divider my-0">

  <!-- Nav Item - Dashboard -->
  <li class="nav-item {{ Request::is('dashboard') ? 'active' : '' }}">
      <a class="nav-link" href="/dashboard">
          <i class="fas fa-fw fa-tachometer-alt"></i>
          <span>Dashboard</span></a>
  </li>

  <!-- Divider -->
  <hr class="sidebar-divider">

  <!-- Heading -->
  <div class="sidebar-heading">
      Manage Movies and News
  </div>
  @php
      $user = Auth::user();
  @endphp
  @if ($user->role == 'user')
  <li class="nav-item {{ Request::is('dashboard/profile*') ? 'active' : '' }}">
    <a class="nav-link" href="/dashboard/profile">
        <i class="fa-solid fa-user"></i>
        <span>Profile</span></a>
    </li>
  <li class="nav-item {{ Request::routeIs('change-password') ? 'active' : '' }}">
    <a class="nav-link" href="{{ route('change-password') }}">
        <i class="fas fa-cogs"></i>
        <span>Change Password</span></a>
    </li>
  @endif

  @can('admin')
    <!-- Nav Item - Pages Collapse Menu -->
    <li class="nav-item {{ Request::is('dashboard/movies/genres') || Request::is('dashboard/movies') ? 'active' : '' }}">
        <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseOne"
            aria-expanded="true" aria-controls="collapseOne">
            <i class="fa-solid fa-film"></i>
            <span>Movies</span>
        </a>
        <div id="collapseOne" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionSidebar">
            <div class="bg-white py-2 collapse-inner rounded">
                <a class="collapse-item {{ Request::is('dashboard/movies') ? 'active' : '' }}" href="/dashboard/movies">Movie</a>
                <a class="collapse-item {{ Request::is('dashboard/movies/genres*') ? 'active' : '' }}" href="/dashboard/movies/genres">Genre</a>
            </div>
        </div>
    </li>
    <!-- Nav Item - Pages Collapse Menu -->
    <li class="nav-item {{ Request::is('dashboard/news/categories') || Request::is('dashboard/news') ? 'active' : '' }}">
      <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseTwo"
          aria-expanded="true" aria-controls="collapseTwo">
          <i class="fa-solid fa-newspaper"></i>
          <span>News</span>
      </a>
      <div id="collapseTwo" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionSidebar">
          <div class="bg-white py-2 collapse-inner rounded">
              <a class="collapse-item {{ Request::is('dashboard/news') ? 'active' : '' }}" href="/dashboard/news">News</a>
              <a class="collapse-item {{ Request::is('dashboard/news/categories*') ? 'active' : '' }}" href="/dashboard/news/categories">Category</a>
          </div>
      </div>
  </li>

  <!-- Divider -->
  <hr class="sidebar-divider">

  <!-- Heading -->
  <div class="sidebar-heading">
      Export and Import Users Data
  </div>

  <li class="nav-item {{ Request::is('dashboard/user/index') ? 'active' : '' }}">
    <a class="nav-link" href="/dashboard/user/index">
        <i class="fas fa-users"></i>
        <span>Import & Export</span></a>
    </li>

  @endcan


  <!-- Sidebar Toggler (Sidebar) -->
  <div class="text-center d-none d-md-inline" style="margin-top: 80px">
      <button class="rounded-circle border-0" id="sidebarToggle"></button>
  </div>


</ul>
<!-- End of Sidebar -->