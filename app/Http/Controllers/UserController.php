<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
USe App\Models\User;

class UserController extends Controller
{
    public function login(Request $request) {
        $credentials = $request->validate([
            'email' => 'required|email',
            'password' => 'required',
        ]);

        if (Auth::attempt($credentials)) {
            return redirect('/home');
        }

    return back()->withErrors(['email' => 'credenciales incorrectas', 'password' => 'no']);
    }

    public function create(Request $request) {
        $verifiedData = $request->validate([
            'email'=> 'required|email|unique:users,email',
            'password'=> 'required|min:6|max:20,',
            'name'=> 'required|min:3',
            'birthday'=>'required|date'
        ]);

        if( User::create($verifiedData) ) {
            return redirect('/');
        }

        return back()->withErrors([]);
    }
}
