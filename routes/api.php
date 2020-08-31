<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});

//retorna todos os usuários
Route::get('/usuarios',  'api\UsuarioController@exibirTodos');

//retorna um único usuário
Route::get('/usuarios/{id}', 'api\UsuarioController@exibirUsuario');

//cadastrar um usuário
Route::post('/usuarios', 'api\UsuarioController@criarUsuario');

//novo método! mais específico! put! para atualizar informações
Route::put('/usuarios/{id}', 'api\UsuarioController@atualizarUsuario');

//Deletar um usuário: método específico para deletar
Route::delete('/usuarios/{id}', 'api\UsuarioController@deletarUsuario');
