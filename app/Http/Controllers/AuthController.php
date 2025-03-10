<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Session;

class AuthController extends Controller
{
    public function login()
    {
        return view('login');
    }

    public function register()
    {
        return view('register');
    }

    public function dashboard()
    {
        return view('dashboard');
    }

    public function loginPost(Request $request)
    {
        $credentials = $request->validate([
            'email' => ['required', 'email'],
            'password' => ['required'],
        ]);

        $credentials = $request->only('email', 'password');
        if (Auth::attempt($credentials)) {
            $request->session()->regenerate();
            return redirect()->intended('dashboard')->with('success', 'You are logged in!');
        }
        return back()->withErrors([
            'email' => 'The provided email do not match our records.',
            'password' => 'The provided password do not match our records.',
        ]);
    }

    public function registerPost(Request $request)
    {
        try {
            $credentials = request()->validate([
                'name' => ['required'],
                'email' => ['required', 'email'],
                'password' => ['required'],
            ]);

            $credentials['password'] = bcrypt($credentials['password']);
            $user = User::create($credentials);
            Auth::login($user);

            if (Auth::check()) {
                return redirect()->intended('dashboard')->with('success', 'You are logged in!');
            }

            return back()->withErrors([
                'email' => 'The provided email do not match our records.',
                'password' => 'The provided password do not match our records.',
            ]);
        } catch (\Exception $e) {
            // Dump the error message for debugging purposes
            dd($e->getMessage());
        }
    }

    public function logout()
    {
        Session::flush();
        Auth::logout();
        return redirect('/')->with('success', 'You are logged out!');
    }
}
