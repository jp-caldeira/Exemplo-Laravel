<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class actors extends Model
{
      public $primaryKey = "id";
      public $timestamps = false;
      public $guarded = [];
}
