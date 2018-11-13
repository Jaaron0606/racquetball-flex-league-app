<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Auth;
use App\User;

class LoginController extends Controller
{
    protected function credentials(Request $request)
{
    $credentials = [
        $this->username() => strtolower($request->get($this->username())),
        "password" => $request->get("password")
    ];

    return $credentials;
}
   public function login(Request $request){
    
    if (Auth::attempt(['email' => strtolower($request->email),
             'password' => $request->password
            ]))
    {
      $user = User::where('email', strtolower($request->email))->first();
      
      if ($user->is_admin())
      {
        return redirect()-> route('dashboard');
      }
      return redirect()->route('scoreboard');
    }
    
    return redirect()->back();
  }
}
