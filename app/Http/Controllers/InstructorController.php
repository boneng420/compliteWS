<?php

namespace App\Http\Controllers;  // Ensure this is correct

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class InstructorController extends Controller
{
    public function main()
    {
        return view('instructor-main');
    }

    public function sections()
    {
        return view('instructor-section');
    }

    public function profile()
    {
        return view('instructor-profile');
    }

    public function logout()
    {
        Auth::logout();
        return redirect()->route('instructor.main');
    }
}
