@extends('layout.main')

@section('content')

@if (session()->has('success')) 
<div class="alert alert-success alert-dismissible fade show" role="alert">
  {{ session('success') }}
  <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
</div>
@endif

    <div class="row">
        <div class="col-md-4 bg-primary">
            <h1>ini sidebar</h1>
        </div>
        <div class="col-md-8 bg-danger">
            <h1>ini content</h1>
        </div>
    </div>
@endsection