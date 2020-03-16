<?php

namespace App\Http\Controllers;

use App\User;
use Auth;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use DB;

class UserController extends Controller
{
    public function login()
    {
    	return view('login');
    }

    public function postlogin(Request $request)
    {
    	// dd($request->all());

    	if (Auth::attempt($request->only('username','password'))) {
        return redirect('dashboard');

      }
      return redirect('login');	
    }

public function register(Request $request){
        request()->validate([
            'username' => 'required',
            'password' => 'required',
            
        ]);

        $user = new User;
        $user->username = $request->username;
        $user->password = bcrypt($request->password);
        $user->save();
        return redirect('login')->with('message', 'Registrasi berhasil!');
    }
    public function logout()
    {
    	Auth::logout();
    	return view('login');
    }
}

