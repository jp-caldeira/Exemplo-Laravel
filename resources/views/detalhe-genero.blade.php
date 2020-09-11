<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Detalhes: {{$genero->name}}</title>
    <link rel="stylesheet" href={{ asset('css/app.css') }}>
    <link rel="stylesheet" href={{ asset('css/style.css') }}>
  </head>
  <body>
    <div class="container mt-5">
        <h1>{{$genero->name}}</h1>
    </div>
<div class="container">
        <ul>
          @foreach ($filmes as $filme)
              <li><a href="/detalhes-filmes/{{$filme->id}}">{{$filme->title}}</a></li>
          @endforeach
        </ul>
</div>

</body>
</html>
