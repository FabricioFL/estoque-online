<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class RegisterController extends Controller
{

    public function render()
    {
        return view('register');
    }

    public function createUser(Request $request)
    {
        $payload = [
            'username' => $request->input('username-reg'),
            'email' => $request->input('email-reg'),
            'password' => $request->input('password-reg')
        ];

        if($payload['username'] != null && $payload['email'] != null && $payload['password'] != null)
        {
            User::create($payload);
        }
    }
}
