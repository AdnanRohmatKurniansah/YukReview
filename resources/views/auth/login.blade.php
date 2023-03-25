@extends('layout.main')

@section('content')
<div class="row justify-content-center mt-5">
    <div class="col-lg-4">


      @if (session()->has('loginError')) 
      <div class="alert alert-danger alert-dismissible fade show" role="alert">
        {{ session('loginError') }}
        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
      </div>
      @endif

        <main class="form-signin w-100 m-auto">
          <h1 class="h3 mb-3 fw-normal">Please login</h1>
      
            <form action="/auth/login" method="post">
              @csrf
              <div class="form-floating">
                <input type="email" class="form-control @error('email') is-invalid @enderror" autofocus name="email" id="email" placeholder="name@example.com" required value="{{ old('email') }}">
                <label for="email">Email address</label>
                @error('email')
                <div class="invalid-feedback">
                    {{ $message }}
                  </div>            
                @enderror
              </div>
              <div class="form-floating">
                <input type="password" class="form-control @error('password') is-invalid @enderror" name="password" id="password" placeholder="Password" required>
                <label for="password">Password</label>
                @error('password')
                <div class="invalid-feedback">
                    {{ $message }}
                  </div>            
                @enderror
              </div>
          
              <div class="checkbox mb-3">
                <label>
                  <input type="checkbox" value="remember-me"> Remember me
                </label>
              </div>
              <p>Not registered?<a href="/auth/register">Register now</a></p>
              <button class="w-100 btn btn-lg btn-primary" type="submit">Login</button>
            </form>
          </main>
    </div>
</div>
@endsection