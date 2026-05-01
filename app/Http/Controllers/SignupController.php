<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Validation\Rules\Password;

class SignupController extends Controller
{
    public function create() {
        return view("auth.signup");
    }
    public function store(Request $request) {
        $request->validate([
            'name' => ['required' , 'string' , 'max:255'],
            'email' => ['required' , 'string' , 'email', 'max:255','unique:users'],
            'password' => ['required' , Password::default()],
        ]);
        $user = User::create([
            'name' => $request->name ,
            'email' => $request->email , 
            'password' => Hash::make($request->password),
            'phone' => $request->phone,
        ]);
        Auth::login($user);

        return redirect('/home') ;
    }
}
