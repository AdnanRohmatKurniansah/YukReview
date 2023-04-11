@extends('layout.dashboard')

@section('content')
<div class="row m-3">
    <!-- Area Chart -->
    <div class="col-xl-9 col-lg-7">

        <div class="card mb-4">
            <div class="card-header py-3">
                <h5 class="m-0 font-weight-bold text-primary">Profile</h5>
            </div>
            <div class="container">
              <form action="" method="post" enctype="multipart/form-data" class="m-3">
                 @csrf

                 <div class="mb-3">
                    <label for="username" class="form-label">Username</label>
                    <input type="text" class="form-control @error('username') is-invalid @enderror" id="username" 
                    name="username" disabled autofocus value="{{ old('username', $user->username) }}">
                    @error('username')
                        <div class="invalid-feedback">
                          {{ $message }}
                        </div>
                    @enderror
                  </div>
                  <div class="mb-3">
                      <label for="email" class="form-label">Email</label>
                      <input type="email" class="form-control @error('email') is-invalid @enderror" id="email" 
                      name="email" disabled value="{{ old('email', $user->email) }}">
                      @error('email')
                          <div class="invalid-feedback">
                            {{ $message }}
                          </div>
                      @enderror
                    </div>
                    <div class="mb-3">
                      <label for="birth" class="form-label">Birth</label>
                      <input type="text" class="form-control @error('birth') is-invalid @enderror" id="birth" 
                      name="birth" required autofocus value="{{ old('birth', $user->birth) }}">
                      @error('birth')
                          <div class="invalid-feedback">
                            {{ $message }}
                          </div>
                      @enderror
                    </div>
                  <div class="mb-3">
                    <label for="profile" class="form-label">Profile</label>
                    <input type="hidden" name="oldProfile" value="{{ $movie->profile }}">
                      @if ($user->profile)
                        <img src="{{ asset('storage/' . $user->profile) }}" class="img-preview img-fluid mb-3 col-sm-5 d-block">
                      @else
                        <img class="img-preview img-fluid mb-3 col-sm-5">
                      @endif
                  <input class="form-control @error('profile') is-invalid @enderror" type="file" id="profile"
                    name="profile" onchange="previewProfile()">
                  @error('profile')
                      <div class="invalid-feedback">
                        {{ $message }}
                      </div>
                  @enderror
                </div>

                  <button type="submit" class="btn btn-primary">Update Profile</button>
                </form> 
            </div>

        </div>
    </div>
</div>

@endsection