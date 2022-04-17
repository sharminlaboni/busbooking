<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\User;
use App\Models\Trip;
use App\Models\Booking;
use App\Models\Route;







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
    public function dashboard()
    {
        $total_trip=Trip::all()->count();
        $total_customer=User::where('role','customer')->count();
        $total_booking=Booking::all()->count();
        $total_route=Route::all()->count();



        return view('backend.pages.dashboard',compact('total_trip','total_customer','total_booking','total_route'));
    }
    
    //
}
