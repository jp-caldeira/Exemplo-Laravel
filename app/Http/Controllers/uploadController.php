<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class uploadController extends Controller
{
    public function enviarArquivo(Request $request){
      if($request->isMethod('GET')){
        return view('upload');
      }

      $arquivo = $request->file('imagem')->getClientOriginalName();//pegando o nome do arquivo
      $save = $request->file('imagem')->storeAS("public/img", $arquivo);//salvando na pasta e com o nome do arquivo
      $urlBase = 'storage/img/'.$arquivo;//fazendo o caminho do arquivo

      return view('upload', ["imagem" => $urlBase]);
      
    }
}
