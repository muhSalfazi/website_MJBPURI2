<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\DB;

class AuthController extends Controller
{
    /**
     * Show the login form.
     */
    public function showLoginForm()
    {
        return view('login');
    }

    /**
     * Handle the login request.
     */
    public function login(Request $request)
    {
        $request->validate([
            'username' => 'required|string',
            'password' => 'required|string',
        ]);

        $user = DB::table('users')->where('username', $request->username)->first();

        if ($user && Hash::check($request->password, $user->password)) {
            Auth::loginUsingId($user->id);

            DB::table('users')
                ->where('id', $user->id)
                ->update(['last_login' => now()]);

            return redirect()->route('dashboard');
        } else {
            return back()->withErrors([
                'username' => 'Invalid credentials.',
            ]);
        }
    }

    /**
     * Handle the logout request.
        */
        public function logout(Request $request)
        {
        Auth::logout();
        $request->session()->invalidate();
        $request->session()->regenerateToken();
        return redirect()->route('login');
        }
}