@extends('layout.dashboard')

@section('content')
<div class="row m-3">
    <div class="col-xl-9 col-lg-7">

        <div class="card mb-4">
            <div class="card-header py-3">
                <h5 class="m-0 font-weight-bold text-primary">News Categories</h5>
            </div>
            <div class="card-body">
                <a href="/dashboard/news/categories/create" class="btn btn-primary my-2">Add New Category</a>
                <table class="table">
                    <thead>
                      <tr>
                        <th scope="col">#</th>
                        <th scope="col">Category Name</th>
                        <th scope="col">Action  </th>
                      </tr>
                    </thead>
                    <tbody>
                      @foreach ($categories as $category)
                        
                      <tr>
                        <td>{{ $loop->iteration }}</td>
                        <td>{{ $category->name }}</td>
                        <td class="d-flex">
                            <a href="/dashboard/news/categories/{{ $category->slug }}/edit" class="badge bg-info mr-1" style="font-size: 18px"><i class="fa-solid fa-pen-to-square"></i></a>
                            <form action="/dashboard/news/categories/{{ $category->slug }}" method="post">
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
    </div>
</div>
@endsection