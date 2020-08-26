<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Gêneros</title>
    <link rel="stylesheet" href="{{asset('/css/app.css')}}">
    <link rel="stylesheet" href="{{asset('css/style.css')}}">
  </head>
  <body>
    <div class="container conteudo">
        <h1>Gêneros</h1>
        <table class="table table-light">
          <thead>
            <tr>
              <th scope="col">ID</th>
              <th scope="col">Gênero</th>
            </tr>
            <tbody>
        @foreach($generos as $genero)
          <tr>
          <th scope="row">{{$genero->id}}</th>
          <td>{{$genero->name}}</td>
        </tr>
      @endforeach
          </tbody>
      </table>
</div>
  </body>
</html>
