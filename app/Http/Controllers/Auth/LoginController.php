<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Foundation\Auth\AuthenticatesUsers;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class LoginController extends Controller
{
    use AuthenticatesUsers;

    protected $redirectTo = '/dashboard';

    public function __construct()
    {
        $this->middleware('guest')->except('logout');
        $this->middleware('auth')->only('logout');
    }

    public function login(Request $request)
    {
        $request->validate([
            'email' => 'required|email',
            'password' => 'required',
        ]);

        $predefinedUsername = env('PREDEFINED_USERNAME');
        $predefinedPassword = env('PREDEFINED_PASSWORD');
        
        if ($request->email === $predefinedUsername && Hash::check($request->password, bcrypt($predefinedPassword))) {
            Auth::loginUsingId(1); // Assumes the user with ID 1 exists
            return response()->json(['status' => 'success']);
        }

        return response()->json(['message' => 'The provided credentials do not match our records.'], 422);
  

        // if ($request->email === $predefinedUsername && $request->password === $predefinedPassword) {
        //     $user = \App\Models\User::where('email', $predefinedUsername)->first();
            

        //     if ($user) {
        //         Auth::login($user);
        //         return redirect()->intended('/dashboard');
        //     }
        // }

        // return back()->withErrors([
        //     'email' => 'The provided credentials do not match our records.',
        // ]);
    }
}