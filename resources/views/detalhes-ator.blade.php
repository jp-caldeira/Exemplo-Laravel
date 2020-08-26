<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <meta name='viewport' content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href={{ asset('css/app.css')}}>
    <link rel="stylesheet" href={{ asset('css/style.css')}}>
    <title>Detalhes do ator</title>
  </head>
  <body>
    <div class="container conteudo">
      <h1 class="display-4 text-center">{{$ator->first_name}} {{$ator->last_name}}</h1>
      <ul class="list-group">
        <li class="list-group-item">Nome: {{$ator->first_name}}</li>
        <li class="list-group-item">Sobrenome: {{$ator->last_name}}</li>
        <li class="list-group-item">Nota: {{$ator->rating}}</li>

        Filmes:
        @foreach($filmes as $filme)
        <li class="list-group-item">{{$filme["title"]}}</li>
        @endforeach
      </ul>

    </div>

  </body>
</html>
