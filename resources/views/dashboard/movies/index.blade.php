@extends('layout.dashboard')

@section('content')
    <div class="row m-3">
        <!-- Area Chart -->
        <div class="col-xl-9 col-lg-7">

            <div class="card mb-4">
                <div class="card-header py-3">
                    <h5 class="m-0 font-weight-bold text-primary">Movies</h5>
                </div>
                <div class="card-body">
                  <form action="/dashboard/scrap" method="get">
                    <div class="input-group mb-3">
                      <input type="text" class="form-control" name="name" placeholder="Enter movie's name" aria-describedby="button-addon2">
                      <button class="btn btn-success" type="submit" id="button-addon2">Scrap</button>
                    </div>
                  </form>
                    <a href="/dashboard/movies/create" class="btn btn-primary my-2">Add New Movies</a>
                    <table class="table">
                        <thead>
                          <tr>
                            <th scope="col">#</th>
                            <th scope="col">@sortablelink('title')</th>
                            <th scope="col">Genre</th>
                            <th scope="col">@sortablelink('rating')</th>
                            <th scope="col">Action </th>
                          </tr>
                        </thead>
                        <tbody>
                          @foreach ($movies as $movie)
                            
                          <tr>
                            <td>{{ $loop->iteration }}</td>
                            <td>{{ $movie->title }}</td>
                            <td>{{ implode(', ', $movie->genres->pluck('name')->toArray()) }}</td>
                            <td>{{ $movie->rating }}</td>
                            <td class="d-flex">
                                <a href="/dashboard/movies/{{ $movie->slug }}/edit" class="badge bg-info mr-1" style="font-size: 18px"><i class="fa-solid fa-pen-to-square"></i></a>
                                <form action="/dashboard/movies/{{ $movie->slug }}" method="post">
                                  @method('delete')
                                  @csrf
                                    <button class="badge bg-danger border-0" onclick="return confirm('Are you sure?')" style="font-size: 19px" type="submit"><i class="fa-solid fa-trash"></i></button>
                                </form>
                            </td>
                          </tr>

                          @endforeach
                        </tbody>
                      </table>
                </div>
            </div>

            <div class="d-flex justify-content-center">
              {{-- {{ $movies->links() }} --}}
              {!! $movies->appends(Request::except('page'))->render() !!}
            </div>
        </div>
    </div>

@endsection