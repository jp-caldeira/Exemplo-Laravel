<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Detalhe do filme</title>
    <link rel="stylesheet" href={{ asset('css/app.css') }}>
    <link rel="stylesheet" href={{ asset('css/style.css') }}>
  </head>
  <body>
    <div class="container conteudo">
    <h1>{{ $filme->title }}</h1>
    <ul>
      <li>Rating: {{ $filme->rating }}</li>
      <li>Prêmios: {{ $filme->awards }}</li>
    </ul>
    </div>
  </body>
</html>
