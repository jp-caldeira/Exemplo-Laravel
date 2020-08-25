<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\actors;

class AtorController extends Controller
{
    public function listarAtores(){
        $atores = actors::all();
        return view('atores', ["atores" => $atores]);
    }

    public function detalheAtor($id){
      $ator = actors::find($id);
      return view('detalhes-ator', ["ator" => $ator]);
    }

    public function listaBonsAtores(){
      $atores = actors::where('rating', '>', '8')
            ->orderBy('rating', 'desc')
            ->get();
      return view('atores', ["atores" => $atores]);
    }

    public function cadastroAtor(Request $request){
      if($request->isMethod('GET')){
        return view('cadastroAtor');
      }
        $novoator = new actors();
        $novoator->first_name = $request->nome;
        $novoator->last_name = $request->sobrenome;
        $novoator->rating = $request->rating;
        $novoator->save();

        return redirect('/cadastro-ator');//repare que aqui você teve que colocar a rota, e não a view(porque dá errado)


    }


}
