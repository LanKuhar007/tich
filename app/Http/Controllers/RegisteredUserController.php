<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class RegisteredUserController extends Controller
{
    public function create()
    {
        return view('auth.signup');
    }

    public function store(Request $request)
    {
        // Validate the user
        $attributes = $request->validate([
            'name' => 'required|unique:users,name',
            'email' => 'required|email|unique:users,email',
            'password' => 'required|min:8',
        ]);

        // Hash the password
        $attributes['password'] = Hash::make($attributes['password']);

        // Create the user
        $user = User::create($attributes);
        
        Auth::login($user);

        return redirect('/');
    }
}