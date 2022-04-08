<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\User;



class UserController extends Controller
{
    public function login()
    {
        return view('backend.pages.login');
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
           return redirect()->route('welcome');
        }
       return redirect()->back()->with('message','Invalid Credentials.');

    }

    public function logout()
    {
        auth()->logout();
        return redirect()->route('admin.login')->with('message','Logout Successful');
    }
    public function list(){
        $users=User :: all();
        return view('backend.Pages.user.list',compact('users'));
    }
    
    //
}
