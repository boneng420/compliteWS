<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\InstructorController;
use Illuminate\Support\Facades\Auth;

// Route for Instructor Dashboard (instructor-main.blade.php)
// Route::get('/', [InstructorController::class, 'main'])->name('instructor.main');

// Route for Instructor Sections Page (instructor-section.blade.php)
// Route::get('/instructor/sections', [InstructorController::class, 'sections'])->name('instructor.sections');

// Route for Instructor Profile (instructor-profile.blade.php)
// Route::get('/instructor/profile', [InstructorController::class, 'profile'])->name('instructor.profile');

// Route for Logout (using POST for logout action)
// Route::post('/logout', [InstructorController::class, 'logout'])->name('instructor.logout');

use App\Http\Controllers\AccountLoginController;

Route::middleware('guest')->group(function () {
    // Redirecting to login page
    Route::get('/', function () {
        return redirect()->route('login');
    });

    // Login routes
    Route::get('/login', [AccountLoginController::class, 'showLoginForm'])->name('login');
    Route::post('/login', [AccountLoginController::class, 'authenticate'])->name('login.authenticate');
});

Route::middleware('auth')->group(function () {
    // Logout route
    Route::post('/logout', [AccountLoginController::class, 'logout'])->name('logout');
    
    // Admin routes
    Route::middleware(['auth', 'role:Admin'])->prefix('admin')->group(function () {
        // Dashboard for Admin
        Route::get('/dashboard', function () {
            return view('admin.dashboard');
        });
        
        // Account creation route
        Route::post('/create-account', [App\Http\Controllers\Admin\AccountController::class, 'createAccount'])
            ->name('admin.create-account');
        
        // List accounts route
        Route::get('/accounts', [App\Http\Controllers\Admin\AccountController::class, 'listAccounts'])
            ->name('admin.list-accounts');
        
        // Update account status route
        Route::patch('/accounts/{accountID}/status', [App\Http\Controllers\Admin\AccountController::class, 'updateAccountStatus'])
            ->name('admin.update-account-status');
    });
    
    // Instructor routes
    Route::middleware(['auth', 'role:Teacher'])->prefix('instructor')->group(function () {
        Route::get('/dashboard', function () {
            return view('instructor.dashboard');
        });
    });
    
    // Student routes
    Route::middleware(['auth', 'role:Student'])->prefix('student')->group(function () {
        Route::get('/dashboard', function () {
            return view('student.dashboard');
        });
    });
});
