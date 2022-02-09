<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class MainController extends Controller
{
    public function home()
    {
        return view('home');
    }
    public function auth()
    {
        return view('authorization');
    }
    public function reg()
    {
        return view('registration');
    }
    public function check(Request $request)
    {
        dd($request);
    }
}
