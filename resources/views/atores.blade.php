<!DOCTYPE html>
<html lang="" dir="ltr">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, inital-scale=1.0">
    <title>Lista de atores</title>
    <link rel="stylesheet" href={{ asset('css/app.css') }}>
    <link rel="stylesheet" href={{ asset('css/style.css') }}>
  </head>
  <body>
      <div class="container conteudo">
        <h1 class="display-4 text-center">Lista de atores</h1>
        <table class="table">
        <tr>
          <thead>
            <th scope='col'>Id do Ator</th>
            <th scope="col">Nome</th>
            <th scope="col">Filmes</th>
            <th scope="col"></th>
          </thead>
        @forelse($atores as $ator)
          <tr>
          <td>{{$ator->id}}</td>
          <td><strong>{{$ator->first_name}} {{$ator->last_name}}</strong></td>
          <td>
            @foreach ($ator->filmes as $filme)
              <p>{{$filme->title}}</p>
            @endforeach
          </td>
          <td><a href="/detalhes-ator/{{$ator->id}}">Detalhes</a></td>
        </tr>



        @empty
        <p>Não há nada para exibir :(</p>
        @endforelse
      </div>

  </body>
</html>
