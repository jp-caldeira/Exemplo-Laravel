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
}
