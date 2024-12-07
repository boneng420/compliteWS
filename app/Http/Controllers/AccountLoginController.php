<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Models\Account;

class AccountLoginController extends Controller
{
    public function showLoginForm()
    {
        return view('UserLogin');
    }

    public function authenticate(Request $request)
    {
        $credentials = $request->validate([
            'username' => 'required',
            'password' => 'required'
        ]);

        // Direct database query to check non-hashed password
        $user = Account::where('username', $credentials['username'])
                      ->where('password', $credentials['password'])
                      ->first();

        if ($user) {
            // Log the user in
            auth()->login($user);
            $request->session()->regenerate();
            
            // Redirect based on account type
            switch ($user->accountType) {
                case 'Admin':
                    return redirect()->intended('/admin/dashboard');
                case 'Instructor':
                    return redirect()->intended('/instructor/dashboard');
                case 'Student':
                    return redirect()->intended('/student/dashboard');
                default:
                    return redirect()->intended('/');
            }
        }

        return back()->withErrors([
            'username' => 'The provided credentials do not match our records.',
        ])->onlyInput('username');
    }

    public function logout(Request $request)
    {
        auth()->logout();
        $request->session()->invalidate();
        $request->session()->regenerateToken();
        return redirect('/');
    }
}