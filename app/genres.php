<?php

namespace App;

use Illuminate\Database\Eloquent\Model;


class genres extends Model
{
    //protected $table = "genres";

    public function filmes()
    {
        return $this->hasMany('App\FilmeModel', 'genre_id');
        //ou
        //return $this->hasMany(FilmeModel::Class, 'genre_id');
    }
}
