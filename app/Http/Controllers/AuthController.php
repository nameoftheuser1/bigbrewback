<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AuthController extends Controller
{
    public function register(Request $request)
    {
        $fields = $request->validate([
            'first_name' => ['required', 'max:50'],
            'last_name' => ['required', 'max:50'],
            'email' => ['required', 'email', 'unique:users,email'],
            'password' => ['required', 'min:8', 'confirmed'],
        ]);

        User::create($fields);

        return redirect()->intended('/login');
    }


    public function login(Request $request) {
    $credentials = $request->validate([
        'email' => ['required', 'email'],
        'password' => ['required'],
    ]);


     if (Auth::attempt($credentials)) {
        $request->session()->regenerate();

        return response()->json(['message' => 'Logged in successfully']);
    }

    return response()->json(['error' => 'The provided credentials are incorrect.'], 401);
    }
}
