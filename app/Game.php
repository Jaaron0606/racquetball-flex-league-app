<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Game extends Model
{
    public function game()
    {
      return $this->belongsTo('App\Match');
    }
}
