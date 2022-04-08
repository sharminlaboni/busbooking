<?php

namespace App\Http\Controllers\Frontend;
use App\Models\Location;
use App\Models\User;
use App\Models\Time;
use App\Http\Controllers\Controller;
use App\Models\Route;
use App\Models\Trip;
use Illuminate\Http\Request;

class HomeController extends Controller
{
        public function home(){
           $locations = Location::all();
           $times =Time::all();
           return view('frontend.pages.home',compact('locations','times')); 
        }
        

        public function customerRegistration(Request $request){
            $request->validate([
                'name'=>'required',
                'email'=>'required|email',
                'password'=>'required',

            ]);
            User::create([
                'name'=>$request->name,
                'email'=>$request->email,
                'password'=>bcrypt($request->password),
                'role'=>'customer',


            ]);
            return redirect()->back();
        }

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




        
    
    public function Search(Request $request )
    {
        // dd(($request->all())); 
        $route = Route::where('From_location_name',$request->fromAreaCode)
        ->where('To_location_name',$request->toAreaCode)
        ->first();
        if ($route) {
            $trips = Trip::where('route_id', $route->id)->get();
            return view('frontend.pages.search',compact('trips'));
        }
        return redirect()->back();
        

    }
}
