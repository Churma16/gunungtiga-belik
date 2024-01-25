<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class AuthController extends Controller
{
    public function loginPage()
    {
        return view('auth.login');
    }

    public function login(Request $request)
    {
        // dd($request->all());
        $credentials = $request->only('email', 'password');

        // Check if the user with the provided email exists
        $user = User::where('email', $credentials['email'])->first();

        // Check if the user exists and if their email is verified
        if ($user && $user->email_verified_at) {
            // Attempt authentication
            if (auth()->attempt($credentials)) {
                $request->session()->regenerate();
                return redirect()->intended('dashboard');
            } else {
                // Authentication failed
                return back()->withErrors([
                    'email' => 'The provided credentials do not match our records.',
                ]);
            }
        } else {
            // User doesn't exist or email is not verified
            return back()->withErrors([
                'email' => 'The provided email is not verified or does not exist.',
            ]);
        }
    }


    public function registerPage()
    {
        return view('auth.register');
    }

    public function register()
    {
        $validatedData = request()->validate([
            'name' => 'required|unique:users',
            'email' => 'required|email|unique:users',
            'password' => 'required'
        ]);

        $validatedData['password'] = bcrypt($validatedData['password']);

        User::create($validatedData);

        return redirect('/login');
    }

    public function verifyEmail($id)
    {
        $user = User::findOrFail($id);
        $user->email_verified_at = now();
        $user->save();

        return redirect('/login');
    }

    public function logout()
    {
        auth()->logout();
        return view('auth.login');
    }
}
