@extends('layout.main')

@section('content')
<section id="toplists" style="padding-top: 100px; background-color: rgb(28, 33, 46);">
  <div class="container pb-5">
      <div class="col-12">
        <h3 class="mb-3" style="border-bottom: 1px solid rgb(70, 69, 69); padding-bottom: 5px; color: #fff;">Top Lists</h3>
          <table class="table bg-dark text-light" style="font-size: 18px; border: 1px solid rgb(70, 69, 69)">
              <thead>
                <tr>
                  <th scope="col" class="p-4">#</th>
                  <th scope="col" class="p-4">Title</th>
                  <th scope="col" class="p-4">Rate</th>
                </tr>
              </thead>
              <tbody>
                @foreach ($movies as $movie) 
                  <tr> 
                    <th scope="row" class="p-4">{{ $loop->iteration }}</th>
                    <td class="p-4"><a href="/movies/{{ $movie->slug }}">{{ $movie->title }}</a></td>
                    <td class="p-4">{{ $movie->rating }}</td>
                  </tr>
                @endforeach
              </tbody>
            </table>
        </div>
  </div>
</section>
@endsection