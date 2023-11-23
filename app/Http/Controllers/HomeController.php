<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Log;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */


    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        return view('home');
    }

    public function redirects()
    {
        $usertype = Auth::user()->usertype;
        Log::info("UserType: $usertype");

        if($usertype=='1')
        {
            return view('admin.adminhome');
        }

        else
        {
            return view('home');
        }
    }
}

