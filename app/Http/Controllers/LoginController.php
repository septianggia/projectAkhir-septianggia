<?php

namespace App\Http\Controllers;

use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class LoginController extends Controller
{
    //
    public function loginView()
    {
        return view('login');
    }
    public function authenticate(Request $request):RedirectResponse
    {
        $credentials = $request->validate([ 
            'email' => ['required','email:rfc,dns'],
            'password' => ['required'],
        ]);
        if (Auth::attempt($credentials)) {
            $request->session()->regenerate();
            return redirect()->intended('/');
        }
        return back()->with('loginError','Login Failed');
        
    }
}
