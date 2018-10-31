<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
use Auth;

class UsersController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('players.index');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
         return view ('players.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
       $this->validate($request, [
           'name' => 'required',
           'email' => 'required',
           'admin' => 'required',
           'password' => 'required'
    ]);
        $newplayer = new User;
        $newplayer->name = $request->input('name');
        $newplayer->email = $request->input('email');
        $newplayer->admin = $request->input('admin');
        $newplayer->password = bcrypt($request->input('password'));
        $newplayer->save();
        return redirect('/users')->with('success', 'User Created');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $oneplayer =  User::find($id);
        return view('players.show')->with('oneplayer', $oneplayer); 
    }

    public function edit($id)
    {
        $upplayer = User::find($id);
        return view('players.edit')->with('upplayer', $upplayer);
    }

    
    public function update(Request $request, $id)
    {
        $this->validate($request, [
           'name' => 'required',
           'email' => 'required',
         //  'admin' => 'required'
    ]);
        $upplayer = User::find($id);
        $upplayer->name = $request->input('name');
        $upplayer->email = $request->input('email');
        $upplayer->admin = $request->input('admin');
        //$upplayer->password = bcrypt($request->input('password'));
        $upplayer->save();
        
        if (Auth::user()->id == $upplayer->id){
            return redirect('/');
        }
 else return redirect('/users')->with('success', 'User Updated');
    }


    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
