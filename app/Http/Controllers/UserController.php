<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class UserController extends Controller
{
    public function show_register(){
        return view('users.register');
    }

    public function register(Request $request){
            $validateData = $request->validate([
                'name'=> 'required',
                'email'=> 'required',
                'password'=> 'required',
            ]);

            User::create($validateData);

            return redirect('/dash');
    }


    public function show_login(){
        return view('users.login');
    }

    public function login(Request $request){
        $validateData = $request->validate([
            'email'=> 'required',
            'password'=> 'required',
        ]);

        if (Auth::attempt($credentials)) {
            // Authentication passed
            return redirect('/dash');
        } else {
            // Authentication failed
            return back()->withErrors(['message' => 'Invalid credentials']);
        }
    }


    public function dashboard(){
        return view('users.dash');
    }
}
