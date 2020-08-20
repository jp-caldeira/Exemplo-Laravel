<?php

use Illuminate\Support\Facades\Route;
use Monolog\Logger;
use Monolog\Handler\FirePHPHandler;
use Monolog\Handler\StreamHandler;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {

  $logger = new Logger('my_logger');
  $logger->pushHandler(new StreamHandler('../storage/logs/my_app.log', Logger::DEBUG));
  $logger->pushHandler(new FirePHPHandler());
  $logger->info('Novo acesso na home.....');

  return view('welcome');
});

//

// Route::get('/ola', function(){
//     return "Olá usuário boa tarde!";
// });

Route::post('/enviaFormulario', function(){
      return "formulario enviado!";
});

Route::get('/home/{nome}', function($nome){
    return "Olá ".$nome;
});

Route::get('/home/{nome}/{surname?}', function ($nome, $surname = 'no surname'){
    return 'Olá '.$nome." ".$surname;
});

Route::get('/ola/{nome?}', function ($nome = null){
    return "Boa tarde $nome";
});

///rota da página filmes ---

Route::get('/filme', function(){
    $listaFilmes = [
        ["filme" => "Titanic", "Avaliação" => 9.5, "Lançamento" => "1998"],
        ["filme" => "Feitiço do Tempo", "Avaliação" => 10, "Lançamento" => "1993"],
        ["filme" => "De Volta para o Futuro", "Avaliação" => 9, "Lançamento" => "1985"],
        ["filme" => "A múmia (aquele com o Tom Cruise)", "Avaliação" => 4.5, "Lançamento" => "2017"]
    ];
    return view('filme', ["listaFilmes" => $listaFilmes]);
});

Route::get('/detalhes-filmes/{nome?}', function ($nome = null){
    return view('detalhes-filmes', ['filme' => $nome]);
});

Route::get('/user-page/{nome?}/{sobrenome?}', function ($nome = null, $sobrenome = null){
    $vac = compact('nome', 'sobrenome');
    return view('user-page', $vac);
});
