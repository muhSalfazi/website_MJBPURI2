<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\DB;
use App\Models\User;
class AuthController extends Controller
{
    /**
     * Show the login form.
     *
     * @return \Illuminate\View\View
     */
    public function showLoginForm()
    {
        return view('login');
    }

    /**
     * Handle the login request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\RedirectResponse
     */
    public function login(Request $request)
    {
        $request->session()->regenerate();
        $request->validate([
            'username' => 'required|string|min:3|max:50',
            'password' => 'required|string|min:8|max:255',
        ]);

        // Retrieve user by username
        $user = User::where('username', $request->username)->first();

        if ($user && Hash::check($request->password, $user->password)) {
            // Log in the user
            Auth::loginUsingId($user->id);

            // Update last login timestamp
            DB::table('users')->where('id', $user->id)->update(['last_login' => now()]);

            return redirect()->route('dashboard');
              
        } else {
            return redirect()->route('login') ->with('msg', 'Password atau kata sandi anda salah.')
            ->with('error', false);
        }
    }

    /**
     * Handle the logout request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\RedirectResponse
     */
    public function logout(Request $request)
    {
        Auth::logout();
        $request->session()->invalidate();
        $request->session()->regenerateToken();

        return redirect()->route('welcome')
            ->with('msg', 'Logout successful.')
            ->with('error', false);
    }
}