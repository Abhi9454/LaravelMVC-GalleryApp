<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Auth;

class AuthController extends Controller
{
    public function index(){
        if(Auth::user())
        {
            return redirect('/folders');
        }
        else{
            return view('auth.login');
        }
    }


    public function login(Request $request){
        
        $this->validate($request, [
            'email' => 'required|email',
            'password' => 'required',
        ]);

        $user = array(
            'email'  => $request->get('email'),
            'password' => $request->get('password')
           );
        if(Auth::attempt($user))
        {
            return redirect('/folders');
        }
        else
        {
            return redirect()->back()->withErrors([
                'error' => 'Wrong credentials',
            ]);
        }
    }


    public function logout()
    {
        if(Auth::user()){
            Auth::logout(); 
            return redirect('/');
        }
    }
}
