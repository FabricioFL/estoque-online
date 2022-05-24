<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class LoginController extends Controller
{
    

    public function render()
    {
        if(session('status') == true)
        {
            return redirect('dashboard');
        }
        
        return view('login');
    }


    public function login(Request $request)
    {

        $payload = [

            'username' => $request->input('username'),
            'password' => $request->input('password')

        ];

       $user = DB::table('users')->where('username', $payload['username'])->where('password', $payload['password'])->get();
       if($user[0] != null)
       {
           session(['status' => true]);
           return redirect('dashboard');
       }
    }


}
