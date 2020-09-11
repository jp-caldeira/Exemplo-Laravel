<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\genres;

class GenreController extends Controller
{
    public function listGenres(){
      $genres = genres::all();
      return view('genres', ["generos" => $genres]);

    }

    public function detalheGenero($id)
    {
      $genre = genres::find($id);
      $filmes = $genre->filmes;
      //dd($filmes);

      return view('detalhe-genero', ["genero" => $genre], ["filmes" => $filmes]);
    }
}
