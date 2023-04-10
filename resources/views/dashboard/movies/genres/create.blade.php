@extends('layout.dashboard')

@section('content')
<div class="col-xl-9 col-lg-7">

    <div class="card mb-4">
        <div class="card-header py-3">
            <h5 class="m-0 font-weight-bold text-primary">Add New Genre</h5>
        </div>
        <div class="container">
            <form action="/dashboard/movies/genres" method="post" enctype="multipart/form-data" class="m-3">
                  @csrf
                  <div class="mb-3">
                      <label for="name" class="form-label">Genre Name</label>
                      <input type="text" class="form-control @error('name') is-invalid @enderror" id="name" 
                      name="name" required autofocus value="{{ old('name') }}">
                      @error('name')
                          <div class="invalid-feedback">
                            {{ $message }}
                          </div>
                      @enderror
                    </div>
                    <div class="mb-3">
                        <label for="slug" class="form-label">Slug</label>
                        <input type="text" class="form-control @error('slug') is-invalid @enderror" id="slug" 
                        name="slug" required value="{{ old('slug') }}">
                        @error('slug')
                            <div class="invalid-feedback">
                              {{ $message }}
                            </div>
                        @enderror
                        </div>
                  <button type="submit" class="btn btn-primary">Create Genre</button>
                </form> 
        </div>
    </div>
</div>

<script>
        
    const name = document.querySelector('#name')
    const slug = document.querySelector('#slug')
    
    name.addEventListener('change', function() {
        fetch('/dashboard/movies/genres/checkSlug?name=' + name.value)
        .then(response => response.json())
        .then(data => slug.value = data.slug)
    });


</script>

@endsection