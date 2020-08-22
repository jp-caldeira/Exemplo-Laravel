<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href={{ asset('css/app.css')}}>
    <link rel="stylesheet" href={{ asset('css/style.css') }}>

    <title>Cadastrar Filme</title>
  </head>
  <body>
    <div class="container conteudo">
      <h1 class="display-4 text-center">Cadastro de Filme</h1>
        <form class="" action="/cadastrarFilme" method="POST">
            @csrf
            <input class="form-control" type="text" name="tituloFilme" value="" placeholder="Digite o título do filme"></input>
            <input class="form-control" type="number" name="ratingFilme" value="" min="0" max="10" step="0.1" placeholder="Nota do filme"></input>
            <input class="form-control" type="number" name="premiosFilme" value="" placeholder="Número de prêmios"></input>
            <input class="form-control" type="date" name="lancamentoFilme" value="" placeholder="Digite o título do filme"></input>
            <button class="btn btn-success" type="submit"  name="button">Cadastrar</button>
        </form>
    </div>
    @if(isset($resultado))
      @if($resultado)
        <h1>Filme cadastrado com sucesso!</h1>
      @else
      <h1>Erro na hora de cadastrar! Tente novamente.</h1>
      @endif
    @endif
  </body>
</html>
