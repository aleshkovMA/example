<?php

namespace App\Http\Controllers;

use App\Models\MainModel;
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
        $valid = $request->validate(['paste'=>'required']);
        $paste = new MainModel();
        $paste->text = $request->input('paste');
        //$paste->author = $request->input('paste');
        $paste->access = $request->input('access');
        if($request->input('expirationTime')!="unlimited")
        {
            $paste->typedtime = $request->input('expirationTime');
        }
        $paste->save();

        return redirect()->route('home');
    }
}
