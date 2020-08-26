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
  
        @forelse($filmes as $filme)
        <ul class="list-group">
        <li class="list-group-item"><strong>{{ $filme->title }}</strong> </li>
        <li class="list-group-item">Rating: {{ $filme->rating}}</li>
        <li class="list-group-item">Gênero: {{ $filme->genres->name}}</li>
        <a class="list-group-item" href="/detalhes-filmes/{{$filme->id}}">Ver detalhes</a>
        <a class="list-group-item" href="/deletarFilme/{{$filme->id}}">Apagar filme</a>
        </ul>
        @empty
        <p>Não há filmes para exibir!</p>
        @endforelse
    </ul>
    {{-- {{ $filmes->links() }} --}}
    </div>
    </div>
  </body>
</html>
