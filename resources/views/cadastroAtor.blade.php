<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href={{ asset('css/app.css') }}>
    <link rel="stylesheet" href={{ asset('css/style.css')}}>
    <title>Cadastro de atores</title>
  </head>
  <body>
    <div class="container conteudo">
      <h1 class="display-4 text-center">Cadastro de Atores</h1>
    <form class="" action="/cadastro-ator" method="post">
      {{csrf_field()}}
      <input class="form-control" type="text" name="nome" value="" placeholder="Digite o nome"></input>
      <input class="form-control"type="text" name="sobrenome" value="" placeholder="Digite o sobrenome"></input>
      <input class="form-control" type="number" name="rating" value="" min="0" max="10" step="0.1" placeholder="Dê uma nota para o ator"></input>
      <button class="btn btn-success" type="submit" name="button">Enviar</button>
    </form>
  </div>
  </body>
</html>
