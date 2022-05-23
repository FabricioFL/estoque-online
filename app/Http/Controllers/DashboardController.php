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


    public function logout()
    {
        session()->forget('status');
        return redirect('login');
    }


}
