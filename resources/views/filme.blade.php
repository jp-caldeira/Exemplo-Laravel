<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Lista de filmes</title>
    <link rel="stylesheet" href={{ asset('css/app.css') }}>
    <link rel="stylesheet" href={{ asset('css/style.css') }}>
  </head>
  <body>
  <div class="container">
  <div class="container-fluid conteudo">
    <h1 class="display-4 text-center">Lista de filmes</h1>
    <ul class="list-group">
        @forelse ($listaFilmes as $filmes) 
            @if ($filmes['Avaliação'] >= 8) 
        <li class="list-group-item">Nome: {{$filmes['filme']}} - Avaliação: {{$filmes['Avaliação']}} - Ano de Lançamento: {{$filmes['Lançamento']}} - Excelente</li>
            @else
        <li class="list-group-item">Nome: {{$filmes['filme']}} - Avaliação: {{$filmes['Avaliação']}} - Ano de Lançamento: {{$filmes['Lançamento']}} - Meia boca</li>
            @endif
        @empty
        <p>Não há nada para exibir :(</p>
        @endforelse
    </ul>
    </div> 
    </div>
  </body>
</html>
