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


//criando arquivo log....
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

Route::get('/user-page/{nome?}/{sobrenome?}', function ($nome = null, $sobrenome = null){
    $vac = compact('nome', 'sobrenome');
    return view('user-page', $vac);
});

///rota da página filmes....
Route::get('/filmes', 'FilmeController@listarFilmes');

//rota detalhes dos filmes... com parametro
Route::get('/detalhes-filmes/{id}', 'filmeController@detalheFilme');

// Route::get('/detalhes-filmes/{nome?}', function ($nome = null){
//     return view('detalhes-filmes', ['filme' => $nome]);
// });

//mesma rota, métodos diferentes: uma exibe o formulário, a outra salva os dados enviados
Route::get('/cadastrarFilme', 'FilmeController@cadastrarFilme');
Route::post('/cadastrarFilme', 'FilmeController@cadastrarFilme');
//ou route::post('salvarFilme', 'FilmeController@cadastrarFilme');

//deletando o filme do banco....
Route::get('/deletarFilme/{id}', 'FilmeController@deletarFilme');


Route::get('/atores', 'AtorController@listarAtores');

Route::get('/detalhes-ator/{id}', 'AtorController@detalheAtor');

Route::get('/atores-nota-dez', 'AtorController@listaBonsAtores');

//rota cadastro ator
Route::get('/cadastro-ator', 'AtorController@cadastroAtor');
Route::post('/cadastro-ator', 'AtorController@cadastroAtor');

//rota de upload dos arquivos
Route::get('/upload', 'uploadController@enviarArquivo');
Route::post('/upload', 'uploadController@enviarArquivo');

//generos
Route::get('/generos', 'GenreController@listGenres');
