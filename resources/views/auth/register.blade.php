@extends('layout.kosong')

@section('content')
<div class="row justify-content-center mt-5">
    <div class="col-lg-3" style="border: 1px solid rgb(204, 201, 201); padding: 20px; margin-top: 50px; margin-bottom: 100px; box-shadow: 2px 2px 2px rgb(224, 221, 221)">
        <main class="form-signin w-100 m-auto">
          <h1 class="h3 mb-3 fw-normal d-flex justify-content-center">Please Register</h1>
      
            <form action="/auth/register" method="post">
              @csrf
              <div class="form-floating">
                <input type="text" class="form-control mb-3  @error('name') is-invalid @enderror" name="name" id="name" placeholder="name" required value="{{ old('name') }}">
                <label for="name">Name</label>
                @error('name')
                <div class="invalid-feedback">
                    {{ $message }}
                  </div>            
                @enderror
              </div>
              <div class="form-floating">
                <input type="email" class="form-control mb-3 @error('email') is-invalid @enderror" name="email" id="email" placeholder="name@example.com" required value="{{ old('email') }}">
                <label for="email">Email address</label>
                @error('email')
                <div class="invalid-feedback">
                    {{ $message }}
                  </div>            
                @enderror
              </div>
              <div class="form-floating">
                <input type="password" class="form-control mb-3 @error('password') is-invalid @enderror" name="password" id="password" placeholder="Password" required>
                <label for="password">Password</label>
                @error('password')
                <div class="invalid-feedback">
                    {{ $message }}
                  </div>            
                @enderror
              </div>
              <div class="form">
                <div class="col-md-6"> {!! htmlFormSnippet() !!} </div>
                @error('g-recaptcha-response')
                <span class="text-danger" role="alert">
                    {{ $message }}
                </span>
                @enderror
              </div>
          
              <p class="mt-3 mb-3">Already registered?<a class="text-primary" href="/auth/login">Login now</a></p>
              <button class="w-100 btn btn-lg btn-primary" type="submit">Register</button>
            </form>
          </main>
    </div>
</div>
@endsection