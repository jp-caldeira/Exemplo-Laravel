<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href={{ asset('css/app.css')}}>
    <link rel="stylesheet" href={{ asset('css/style.css') }}>

    <title>Upload de Arquivo</title>
  </head>
  <body>

      <div class="container conteudo">

        <h1 class="display-4 text-center">Upload de arquivo</h1>

        @if($errors->any())
        <div class="alert alert-danger">
          <ul>
          @foreach($errors->all() as $error)
            <li>{{$error}}</li>
          @endforeach
        </ul>
      </div>
      @endif

      <form class="" action="{{url('/upload')}}" method="POST" enctype="multipart/form-data">
            @csrf
            <label for="">Input arquivo</label>
            <input type="file" name="imagem" value=""></input><br>
            <button class="btn btn-success" type="submit"  name="button">Cadastrar</button>
        </form>
    </div>
@if(isset($imagem))
    <div class="col-md-06">
      <h1>Imagem enviada!</h1>
      <img src="{{$imagem}}" alt="">
  </div>
@endif

</body>
