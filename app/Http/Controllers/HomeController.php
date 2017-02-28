<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Auth;

class HomeController extends Controller
{
    public function index()
    {
        if(Auth::check()){
            return redirect('/home');
        }
        return view('welcome');
    }

    public function home()
    {
        if(Auth::check()){
            return view('home');
        }
        return redirect('/');
    }

    public function registration()
    {
        return view('auth.registration');
    }
}
