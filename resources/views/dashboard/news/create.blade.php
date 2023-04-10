@extends('layout.dashboard')

@section('content')
<div class="row m-3">
    <div class="col-xl-9 col-lg-7">
    
        <div class="card mb-4">
            <div class="card-header py-3">
                <h5 class="m-0 font-weight-bold text-primary">Add News</h5>
            </div>
            <div class="container">
                <form action="/dashboard/news" method="post" enctype="multipart/form-data" class="m-3">
                      @csrf
                      <div class="mb-3">
                          <label for="title" class="form-label">Title</label>
                          <input type="text" class="form-control @error('title') is-invalid @enderror" id="title" 
                          name="title" required autofocus value="{{ old('title') }}">
                          @error('title')
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
                          <div class="mb-3">
                            <label for="category_id" class="form-label">Category</label>
                            <select class="form-select" name="category_id">
                              @foreach ($categories as $category)
                                @if(old('category_id') == $category->id)
                                  <option value="{{ $category->id }}" selected>{{ $category->name }}</option>
                                @else
                                   <option value="{{ $category->id }}">{{ $category->name }}</option>
                                @endif
                              @endforeach
                            </select>
                          </div> 
                        <div class="mb-3">
                          <label for="image" class="form-label">News Image</label>
                          <img class="img-preview img-fluid mb-3 col-sm-5">
                        <input class="form-control @error('image') is-invalid @enderror" type="file" id="image"
                          name="image" onchange="previewImage()">
                        @error('image')
                            <div class="invalid-feedback">
                              {{ $message }}
                            </div>
                        @enderror
                      </div>
                      <div class="mb-3">
                        <label for="body" class="form-label">Body</label>
                        @error('body')
                          <p class="text-danger">{{ $message }}</p>
                        @enderror
                          <input id="body" type="hidden" name="body" value="{{ old('body') }}">
                          <trix-editor input="body"></trix-editor>
                      </div> 
                      <button type="submit" class="btn btn-primary">Create Blog</button>
                    </form> 
            </div>
        </div>
    </div>
</div>

<script>
    
    const title = document.querySelector('#title')
    const slug = document.querySelector('#slug')
    
    title.addEventListener('change', function() {
        fetch('/dashboard/news/checkSlug?title=' + title.value)
        .then(response => response.json())
        .then(data => slug.value = data.slug)
    });
    document.addEventListener('trix-file-accept', function(e) {
       e.preventDefault();
    })

    function previewImage() {
      const image = document.querySelector('#image');
      const imgPreview = document.querySelector('.img-preview');
      imgPreview.style.display = 'block';
      const oFReader = new FileReader();
      oFReader.readAsDataURL(image.files[0]);
      oFReader.onload = function(oFREvent) {
        imgPreview.src = oFREvent.target.result;
      }
    }
    </script>

@endsection