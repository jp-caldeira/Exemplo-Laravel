<?php

use Illuminate\Support\Facades\Route;

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
    return view('welcome');
});
//
// Route::get('/ola', function(){
//   return "<h1>Olá Usuário!</h1>";
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


Route::get('/ola/{nome}', function ($nome){
    return "Boa tarde, ".$nome;
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
    return view ('user-page', $vac);
});
