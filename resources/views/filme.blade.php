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
    <table class="table">
        <tr>
          <thead>
            <th scope='col'>Id do filme</th>
            <th scope="col">Nome do filme</th>
            <th scope="col">Gênero</th>
            <th scope="col">Atores</th>
            <th scope="col"></th>
            <th scope="col"></th>
          </thead>
      @forelse($filmes as $filme)
        <tr>
          <td>{{$filme->id}}</td>
          <td><strong>{{$filme->title}}</strong></td>
          <td><a href="/detalhe-genero/{{ $filme->genre_id }}">{{ $filme->genres->name ?? ''}}</a></td>
          <td>@foreach ($filme->actors as $ator)
            <li>{{$ator->first_name}} {{$ator->last_name}}</li>
          @endforeach
          </td>
          <td><a href="/detalhe-filme/{{$filme->id}}">Ver detalhes</a></td>
          <td><a href="/deletarFilme/{{$filme->id}}">Apagar filme</a></td>
        </tr>

    @empty
      <h3>Não há filmes para exibir :(</h2>
    @endforelse
    </table>
    {{-- {{ $filmes->links() }} --}}
    </div>
    </div>
  </body>
</html>
