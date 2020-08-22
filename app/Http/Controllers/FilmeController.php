<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\FilmeModel;

class FilmeController extends Controller
{
    public function listarFilmes(){
        $filmes = FilmeModel::paginate(5);
        return view('filme',["filmes"=>$filmes]);
        }

    public function detalheFilme($id){
      $filme = FilmeModel::find($id);
      return view('detalhes-filmes', ["filme" => $filme]);
    }

    public function cadastrarFilme(Request $request){
      if ($request->isMethod('GET')){
        return view('cadastrarFilme');
      }
        $novoFilme = new FilmeModel();
        $novoFilme->title = $request->tituloFilme;
        $novoFilme->rating = $request->ratingFilme;
        $novoFilme->awards = $request->premiosFilme;
        $novoFilme->release_date = $request->lancamentoFilme;

      $resultado = $novoFilme->save();

      return view('cadastrarFilme', ["resultado" => $resultado]);
    }

    public function deletarFilme($id){
      $filme = FilmeModel::find($id);
      $filme->delete();

      return redirect()->action("FilmeController@listarFilmes");  
    }

}
