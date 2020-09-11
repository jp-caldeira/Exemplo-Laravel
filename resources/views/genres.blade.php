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
              <th scope="col">Gênero</th>
              <th scope="col">Detalhes</th>
              <th scope="col">Filmes</th>
            </tr>
            <tbody>
        @foreach($generos as $genero)
          <tr>
          <td>{{$genero->name}}</td>
          <td><a href="/detalhe-genero/{{$genero->id}}">Exibir</a></td>
          <td>
          @foreach ($genero->filmes as $filme)
            <li>{{$filme->title}}</li>
          @endforeach
          </td>
        </tr>
      @endforeach
          </tbody>
      </table>
</div>
  </body>
</html>
