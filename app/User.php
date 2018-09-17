<?php

namespace App;

use Illuminate\Notifications\Notifiable;
use Illuminate\Foundation\Auth\User as Authenticatable;

class User extends Authenticatable
{
    use Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name', 'email', 'password',
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];
    
    protected function matches()
    {
        return $this->belongsToMany('App/Match')
            ->withTimestamps();
    }

    
    public function is_admin()
    {
        if ($this->admin)
        { return true;}
        return false;
    }

//    public function yes_or_no()
  //      {
    //    if (1) {
      //      $updating = $dbConnect->query(UPDATE User SET admin=1 WHERE name='James admin'); }
        //else (UPDATE user SET admin=1 WHERE name='James admin';)
        //}
    
    
}

