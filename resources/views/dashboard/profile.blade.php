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
              <form action="{{ route('update-profile') }}" method="post" enctype="multipart/form-data" class="m-3">
                 @csrf
                  <div class="col-md-12">
                    <div class="row d-flex justify-content-center">
                      <div class="col-md-5">
                        @if ($users->profilePic == null)
                          <img src="/assets/img/blank.png" class="rounded-circle img-fluid mb-3" alt="">
                        @else
                          <img src="{{ asset('storage/' . $users->profilePic) }}" class="rounded-circle img-fluid mb-3">
                        @endif
                      </div>
                    </div>
                  </div>
                 <div class="mb-3">
                    <label for="name" class="form-label">Name</label>
                    <input type="text" class="form-control @error('name') is-invalid @enderror" id="name" 
                    name="name" required autofocus value="{{ old('name', $users->name) }}">
                    @error('name')
                        <div class="invalid-feedback">
                          {{ $message }}
                        </div>
                    @enderror
                  </div>
                  <div class="mb-3">
                      <label for="email" class="form-label">Email</label>
                      <input type="email" class="form-control @error('email') is-invalid @enderror" id="email" 
                      name="email" disabled value="{{ old('email', $users->email) }}">
                      @error('email')
                          <div class="invalid-feedback">
                            {{ $message }}
                          </div>
                      @enderror
                    </div>
                    <div class="mb-3">
                      <label for="birth" class="form-label">Birth</label><br>
                      <input type="date" class="form-control @error('birth') is-invalid @enderror" 
                      name="birth" autofocus value="{{ old('birth', $users->birth) }}">
                      @error('birth')
                          <div class="invalid-feedback">
                            {{ $message }}
                          </div>
                      @enderror
                    </div>
                  <div class="mb-3">
                    <label for="profilePic" class="form-label">Profile Picture</label>
                    <input type="hidden" name="oldProfilePic" value="{{ $users->profilePic }}">
                    <img class="img-preview img-fluid mb-3 col-sm-5">
                   <input class="form-control @error('profilePic') is-invalid @enderror" type="file" id="profilePic"
                    name="profilePic" onchange="previewProfilePic()">
                  @error('profilePic')
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

<script>

function previewProfilePic() {
    const profilePic = document.querySelector('#profilePic');
    const imgPreview = document.querySelector('.img-preview');
    imgPreview.style.display = 'block';
    const oFReader = new FileReader();
    oFReader.readAsDataURL(profilePic.files[0]);
    oFReader.onload = function(oFREvent) {
      imgPreview.src = oFREvent.target.result;
    }
  }
</script>

@endsection