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
     * @var arrays
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
    
    public function matches()
    {
        return $this->belongsToMany('App\Match')
            ->withTimestamps();
    }

    public function generatePassword($length) {
        $characters = 'abcdefghijklmnopqrstuvwxyz' . 
                      'ABCDEFGHIJKLMNOPQRSTUVWXYZ' .
                      '0123456789';
                      
        $password = '';
        $limit = strlen($characters) - 1;
        
        for ($i = 0; $i < $length; $i++) {
          $password .= $characters[mt_rand(0, $limit)];
        }
        
        return $password;
    }
    
    public function is_admin()
    {
        if ($this->admin)
        { return true;}
        return false;
    }
}

    // public function yes_or_no()
    //     {
    //     if (1) {
    //         $updating = $dbConnect->query(UPDATE User SET admin=1 WHERE name='James admin'); }
    //     else (UPDATE user SET admin=1 WHERE name='James admin';)
    //     }
