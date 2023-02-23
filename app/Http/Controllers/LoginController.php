<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\LoginRequest;
use Illuminate\Support\Facades\Log;
use Illuminate\Support\Facades\Auth;

class LoginController extends Controller
{
    //

    public function showLoginForm()
    {
        return view('auth.login');
    }

    public function login(LoginRequest $request){


        // Check if the "remember me" checkbox was checked
        $remember = $request->has('remember');
           $credentials = $request->only('email', 'password');
           if(Auth::attempt($credentials,$remember)){

            $request->session()->regenerate();
            return redirect()->intended('/dashboard');
           }
           return back()->withErrors([
            'email' => 'The provided credentials do not match our records.',
        ]);
       
    }

    public function logout(Request $request){
        Auth::logout();
        $request->session()->invalidate();
        $request->session()->regenerateToken();

        return redirect('login');

        

    }
}
