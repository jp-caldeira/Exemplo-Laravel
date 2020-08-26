<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class actors extends Model
{
      public $primaryKey = "id";
      public $timestamps = false;
      public $guarded = [];

      public function filmes(){
        return $this->belongsToMany(FilmeModel::Class, 'actor_movie', 'actor_id', 'movie_id');

      }

}
