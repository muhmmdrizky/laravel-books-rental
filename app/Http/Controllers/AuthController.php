<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Session;

class AuthController extends Controller
{
    public function login()
    {
        return view('pages/auth/login');
    }

    public function authenticating(Request $request)
    {
        $credentials = $request->validate([
            'username' => ['required'],
            'password' => ['required'],
        ]);

        if (Auth::attempt($credentials)) {
            if (Auth::user()->status != 'active') {
                Auth::logout();
                $request->session()->invalidate();
                $request->session()->regenerateToken();

                Session::flash('status', 'failed');
                Session::flash('message', 'Your account is not active yet. Please contact admin.');
                return redirect('pages/auth/login');
            }
            $request->session()->regenerate();
            if (Auth::user()->role_id == 1) {
                return redirect('pages/dashboard/dashboard');
            }
            if (Auth::user()->role_id == 2) {
                return redirect('pages/dashboard/dashboard');
            }
        }
        Session::flash('status', 'failed');
        Session::flash('message', 'Login invalid.');
        return redirect('pages/auth/login');
    }

    public function logout(Request $request)
    {
        Auth::logout();
        $request->session()->invalidate();
        $request->session()->regenerateToken();

        return redirect('pages/auth/login');
    }

    public function register()
    {
        return view('pages/auth/register');
    }

    public function registerProcess(Request $request)
    {
        $validated = $request->validate([
            'first_name' => 'required',
            'username' => 'required|unique:users|max:255|alpha_dash',
            'password' => 'required|min:8|max:255',
            'phone' => 'max:20',
            'address' => 'required',
        ]);

        Hash::make($request->password);
        User::create($request->all());

        Session::flash('status', 'success');
        Session::flash('message', 'Register success, please wait for your account is activated.');
        return redirect('pages/auth/register');
    }
}
