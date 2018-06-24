<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Match extends Model
{
    protected $table = 'matches';
    
    public function games()
    {
      $this->hasMany('App\Game');
    }
}
