<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class UserController extends Controller
{
    public function login()
    {
        return view('frontend.pages.login');
    }

    public function doLogin(Request $request)
    {
        $request->validate([
           'email'=>'required|email',
           'password'=>'required|min:5'
        ]);

        $credentials=$request->except('_token');

        if(auth()->attempt($credentials))
        {
           return redirect()->route('main');
        }
       return redirect()->back()->with('message','Invalid Credentials.');

    }

}
