@extends('layout.dashboard')

@section('content')
    <div class="container">
        <div class="row justify-content-center mt-5">
            <div class="col-lg-4 border-dark">
                <div class="input-group mb-3">
                    <span class="input-group-text" id="basic-addon1">Email</span>
                    <input type="text" class="form-control" placeholder="Email" aria-label="Email" aria-describedby="basic-addon1">
                  </div>
                <div class="input-group mb-3">
                    <span class="input-group-text" id="basic-addon1">Password</span>
                    <input type="text" class="form-control" placeholder="Password" aria-label="Username" aria-describedby="basic-addon1">
                  </div>
                <div class="input-group mb-3">
                    <span class="input-group-text" id="basic-addon1">Confirm Password</span>
                    <input type="text" class="form-control" placeholder="Confirm Password" aria-label="Username" aria-describedby="basic-addon1">
                  </div>
                  <button type="button" class="btn btn-primary btn-lg">Submit</button>
            </div>
        </div>
    </div>
@endsection