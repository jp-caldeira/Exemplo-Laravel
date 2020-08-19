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

Route::get('/filme', function(){
    return view('filme');
});

Route::get('/detalhes-filmes/{nome?}', function ($nome = null){
    return view('detalhes-filmes', ['filme' => $nome]);
});

Route::get('/user-page/{nome?}/{sobrenome?}', function ($nome = null, $sobrenome = null){
    $vac = compact('nome', 'sobrenome');
    return view('user-page', $vac);
});
