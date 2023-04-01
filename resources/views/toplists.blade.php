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
                  <th scope="col" class="p-4">Name</th>
                  <th scope="col" class="p-4">Rate</th>
                </tr>
              </thead>
              <tbody>
                <tr> 
                  <th scope="row" class="p-4">1</th>
                  <td class="p-4"><a href="/movieDetail">AVENGER END GAME</a></td>
                  <td class="p-4">8,5</td>
                </tr>
                <tr>
                  <th scope="row" class="p-4">2</th>
                  <td class="p-4"><a href="/movieDetail">SPIDERMAN 3</a></td>
                  <td class="p-4">8,5</td>
                </tr>
                <tr>
                  <th scope="row" class="p-4">3</th>
                  <td class="p-4"><a href="/movieDetail">AVENGER END GAME</a></td>
                  <td class="p-4">8,5</td>
                </tr>
                <tr class="p-4">
                  <th scope="row" class="p-4">4</th>
                  <td class="p-4"><a href="/movieDetail">SPIDERMAN 3</a></td>
                  <td class="p-4">8,5</td>
                </tr>
                <tr class="p-4">
                  <th scope="row" class="p-4">5</th>
                  <td class="p-4"><a href="/movieDetail">AVENGER END GAME</a></td>
                  <td class="p-4">8,5</td>
                </tr>
                <tr class="p-4">
                  <th scope="row" class="p-4">6</th>
                  <td class="p-4"><a href="/movieDetail">SPIDERMAN 3</a></td>
                  <td class="p-4">8,5</td>
                </tr>
                <tr class="p-4">
                  <th scope="row" class="p-4">7</th>
                  <td class="p-4"><a href="/movieDetail">AVENGER END GAME</a></td>
                  <td class="p-4">8,5</td>
                </tr>
                <tr class="p-4">
                  <th scope="row" class="p-4">8</th>
                  <td class="p-4"><a href="/movieDetail">SPIDERMAN 3</a></td>
                  <td class="p-4">8,5</td>
                </tr>
                <tr class="p-4">
                  <th scope="row" class="p-4">9</th>
                  <td class="p-4"><a href="/movieDetail">AVENGER END GAME</a></td>
                  <td class="p-4">8,5</td>
                </tr>
                <tr class="p-4">
                  <th scope="row" class="p-4">10</th>
                  <td class="p-4"><a href="/movieDetail">SPIDERMAN 3</a></td>
                  <td class="p-4">8,5</td>
                </tr>
                
               
              </tbody>
            </table>
        </div>
  </div>
</section>
@endsection