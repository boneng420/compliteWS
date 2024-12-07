<?php

namespace App\Models;

use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Support\Facades\Hash; 
class Account extends Authenticatable
{
    protected $table = 'accounts';
    protected $primaryKey = 'accountID';

    protected $fillable = [
        'firstName',
        'lastName',
        'middleName',
        'birthdate',
        'sex',
        'email',
        'username',
        'password',
        'accountType',
        'status'
    ];

    protected $hidden = [
        'password'
    ];

    // Mutator to hash password automatically before saving to the database
    public function setPasswordAttribute($value)
    {
        $this->attributes['password'] = Hash::make($value);  // Bcrypt hashing
    }

    // Validation method for account creation
    public static function validateAccountCreation($data)
    {
        return validator($data, [
            'firstName' => 'required|string|max:50',
            'lastName' => 'required|string|max:50',
            'middleName' => 'nullable|string|max:50',
            'birthdate' => 'required|date',
            'sex' => 'required|in:Male,Female,Other',
            'email' => 'required|email|unique:accounts,email',
            'username' => 'required|string|min:4|max:50|unique:accounts,username',
            'password' => 'required|string|min:8',  // Ensure password meets the criteria
            'accountType' => 'required|in:Student,Instructor,Admin',
        ]);
    }

    // Use 'username' for authentication instead of 'email'
    public function getAuthIdentifierName()
    {
        return 'username';
    }

    // Return the password field used for authentication
    public function getAuthPassword()
    {
        return $this->password;
    }

    // Handle the "remember me" token
    public function getRememberToken()
    {
        return $this->remember_token;
    }

    public function setRememberToken($value)
    {
        $this->remember_token = $value;
    }
}
