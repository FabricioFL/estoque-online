<?php

namespace App\Http\Controllers;


class DashboardController extends Controller
{
    

    public function render()
    {
        if(session('status') == true)
        {
            return view('dashboard');
        }
        return view('404');
    }

    public function products()
    {
        if(session('status') == true)
        {
            return view('products');
        }
        return view('404');
    }

    public function tasks()
    {
        if(session('status') == true)
        {
            return view('tasks');
        }
        return view('404');
    }


    public function messages()
    {
        if(session('status') == true)
        {
            return view('messages');
        }
        return view('404');
    }

    public function logout()
    {
        session()->forget('status');
        return redirect('login');
    }


}
