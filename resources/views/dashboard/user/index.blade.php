@extends('layout.dashboard')

@section('content')
    <div class="row m-3">
        <!-- Area Chart -->
        <div class="col-xl-9 col-lg-7">

            <div class="card mb-4">
                <div class="card-header py-3">
                    <h5 class="m-0 font-weight-bold text-primary">Import and Export User Data</h5>
                </div>
                <div class="card-body">
                    <a href="/dashboard/user/export" class="btn btn-primary my-2">Export</a>
                    <a href="#" class="btn btn-success" data-toggle="modal" data-target="#importModal">
                      Import Data
                    </a>      
                    <table class="table">
                        <thead>
                          <tr>
                            <th scope="col">#</th>
                            <th scope="col">Name</th>
                            <th scope="col">Email</th>
                          </tr>
                        </thead>
                        <tbody>
                          @foreach ($users as $user)
                            
                          <tr>
                            <td>{{ $loop->iteration }}</td>
                            <td>{{ $user->name }}</td>
                            <td>{{ $user->email }}</td>
                          </tr>

                          @endforeach
                        </tbody>
                      </table>
                </div>
            </div>

        </div>

    </div>

    

@endsection