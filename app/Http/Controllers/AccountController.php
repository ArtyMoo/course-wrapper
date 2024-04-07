<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class AccountController extends Controller
{
    public function loginPage()
    {
        return view('livewire.accounts.login');
    }

    public function registerPage()
    {
        return view('livewire.accounts.register');
    }

    public function store()
    {
        $attributes = request()->validate([
            'firstname' => ['required', 'max:255', 'alpha'],
            'lastname' => ['required', 'max:255', 'alpha'],
            'username' => ['required', 'max:255', 'min:3', 'unique:users,username'],
            'email' => ['required', 'max:255', 'unique:users,email'],
            'password' => ['required_with:password_confirmation', 'same:password_confirmation', 'max:255', 'min:6'],
            'password_confirmation' => ['min:6']
        ]);

        $attributes['password'] = bcrypt($attributes['password']);
        $user = User::create($attributes);
        auth()->login($user);

        return redirect('/')->with('success', 'Thank you! Your account has been created.');
    }

    public function login(Request $request)
    {
        $credentials = $request->validate([
            'username' => ['required'],
            'password' => ['required']
        ]);

        if(auth()->attempt($credentials)) {
            $request->session()->regenerate();

            return redirect('/')->with('success', 'Welcome back!');
        }

        return back()->withErrors([
            'username' => 'The username or the password you provided might not be correct.'
        ])->onlyInput('username');
    }

    public function logout(Request $request)
    {
        auth()->logout();

        $request->session()->invalidate();
        $request->session()->regenerateToken();

        return redirect('/')->with('success', 'Goodbye');
    }
}
