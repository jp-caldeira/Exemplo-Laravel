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
        @forelse($atores as $ator)
        <ul class="list-group">
          <li class="list-group-item"><strong>{{ $ator->first_name }} {{ $ator->last_name}}</strong></li>
          <a class="list-group-item" href="/detalhes-ator/{{$ator->id}}">Detalhes</a>
        </ul>
        @empty
        <p>Não há nada para exibir :(</p>
        @endforelse        
      </div>

  </body>
</html>
