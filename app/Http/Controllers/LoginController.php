<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Auth;
use App\Http\Requests\LoginRequest;

class LoginController extends Controller
{
    public function create()
    {
        return view('createloginform');
    }

    public function login(LoginRequest $request)
    {
        
       // dd($request->parameters['login']);
        $credentials = $request->validated();
        //dd(Auth::attempt($credentials));
      
        if (Auth::attempt($credentials)) {
            $request->session()->regenerate();
            //dd(Auth::user());
            //dd(Auth::id());
            return redirect()->intended('/');
        }

        return back()->withErrors([
            'email' => 'The provided credentials do not match our records.',
        ]);
    }

    public function logout(Request $request)
    {
        Auth::logout();

        $request->session()->invalidate();

        $request->session()->regenerateToken();

        return redirect('/');
    } 
}
