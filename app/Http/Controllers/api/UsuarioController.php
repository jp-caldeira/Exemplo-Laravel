<?php

namespace App\Http\Controllers\api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use App\User;


class UsuarioController extends Controller
{
    public function exibirTodos(Request $request)
    {
          $todosUsuarios = User::all();
          return response()->json($todosUsuarios);
    }

    public function exibirUsuario(Request $request, $id)
    {
      $usuario = User::find($id);
      return response()->json($usuario);
    }

    public function criarUsuario(Request $request)
    {

      $usuario = new User();
      $usuario->name = $request->name;
      $usuario->email = $request->email;
      $usuario->password = Hash::make($request->password);
      $usuario->save();

      return response()->json(['Usuário criado com sucesso']);


    }

    public function atualizarUsuario(Request $request, $id)
    {
      $usuario = User::find($id);
      $usuario->name = $request->name;
      $usuario->email = $request->email;
      $usuario->password = Hash::make($request->password);
      $usuario->save();

      return response()->json(['Usuário atualizado com sucesso']);
    }

    public function deletarUsuario(Request $request, $id)
    {

      $usuario = User::find($id);
      $usuario->delete();

      return response()->json(['Usuário DELETADO!']);

    }

}
