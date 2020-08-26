<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class FilmeModel extends Model
{
    public $table = "movies";
    public $primarykey = "id";
    //public $timestamps = false;
    public $guarded = [];

    public function genres(){
        //return $this->belongsTo('App\genres', 'genre_id');
        return $this->belongsTo(genres::Class, 'genre_id');
      }

    public function actors(){
      return $this->belongsToMany(actors::Class,'actor_movie', 'movie_id', 'actor_id');
    }


}
