@extends('layout.main')

@section('content')
<div class="row justify-content-center mt-5">
    <div class="col-lg-4">
        <main class="form-signin w-100 m-auto">
          <h1 class="h3 mb-3 fw-normal">Please register</h1>
      
            <form action="/auth/register" method="post">
              @csrf
              <div class="form-floating">
                <input type="text" class="form-control @error('name') is-invalid @enderror" name="name" id="name" placeholder="Name" required value="{{ old('name') }}">
                <label for="name">Name</label>
                @error('name')
                <div class="invalid-feedback">
                    {{ $message }}
                  </div>            
                @enderror
              </div>
              <div class="form-floating">
                <input type="text" class="form-control  @error('username') is-invalid @enderror" name="username" id="username" placeholder="Username" required value="{{ old('username') }}">
                <label for="username">Username</label>
                @error('username')
                <div class="invalid-feedback">
                    {{ $message }}
                  </div>            
                @enderror
              </div>
              <div class="form-floating">
                <input type="email" class="form-control @error('email') is-invalid @enderror" name="email" id="email" placeholder="name@example.com" required value="{{ old('email') }}">
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
              <p>Already registered?<a href="/auth/login">Login now</a></p>
              <button class="w-100 btn btn-lg btn-primary" type="submit">Register</button>
            </form>
          </main>
    </div>
</div>
@endsection