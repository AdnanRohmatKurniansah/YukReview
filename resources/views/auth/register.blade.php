@extends('layout.main')

@section('content')
<div class="row justify-content-center mt-5">
    <div class="col-lg-4">
        <main class="form-signin w-100 m-auto">
            <form>
              <img class="mb-4" src="../assets/brand/bootstrap-logo.svg" alt="" width="72" height="57">
              <h1 class="h3 mb-3 fw-normal">Please register</h1>
          
              <div class="form-floating">
                <input type="text" class="form-control" id="floatingInput" placeholder="name@example.com">
                <label for="floatingInput">Name</label>
              </div>
              <div class="form-floating">
                <input type="text" class="form-control" id="floatingInput" placeholder="name@example.com">
                <label for="floatingInput">Username</label>
              </div>
              <div class="form-floating">
                <input type="email" class="form-control" id="floatingInput" placeholder="name@example.com">
                <label for="floatingInput">Email address</label>
              </div>
              <div class="form-floating">
                <input type="password" class="form-control" id="floatingPassword" placeholder="Password">
                <label for="floatingPassword">Password</label>
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