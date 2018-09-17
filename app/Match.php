<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Match extends Model
{
    protected $table = 'matches';
    
    public function games()
    {
      return $this->hasMany('App\Game');
    }
    
    public function users()
    {
      return $this->belongsToMany('App\User')
        ->withTimestamps();
    }
}
