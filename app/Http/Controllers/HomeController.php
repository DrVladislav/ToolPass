<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Auth;
use Carbon\Carbon;

class HomeController extends Controller
{
    public function index()
    {
        if (Auth::check()) {
            return redirect('/home');
        }
        return view('welcome', ['today' => Carbon::today()]);
    }

    public function home()
    {
        if (Auth::check()) {
            $services = Auth::user()->services;
            return view('layouts.app', compact('services'));
        }
        return redirect('/');
    }

    public function registration()
    {
        return view('auth.registration');
    }
}
