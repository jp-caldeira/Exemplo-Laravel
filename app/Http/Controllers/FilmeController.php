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

      $mensagemErro = [
        "required" => "O campo :attribute é obrigatório",
        "unique" => "Já existe um filme com esse nome!",
        "numeric" => "O campo :attribute deve ser númerico",
        "between" => "O campo :attribute deve ser de 0 a 10",
        "max" => "O campo :attribute não pode ter mais de :max letras"
      ];

          $validaData = $request->validate([
            "tituloFilme" => "required|unique:App\FilmeModel,title|max:45",
            "ratingFilme" => "required|numeric|between:0,10",
          ], $mensagemErro);



///ou
//              $this->validate($request, [
//                    "tituloFilme" => "required|unique:movies|max:50",
//                    "ratingFilme" => "required|numeric|between:0,10",
//                  ]);


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
