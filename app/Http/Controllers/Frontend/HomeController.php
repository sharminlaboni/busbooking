<?php

namespace App\Http\Controllers\Frontend;
use App\Models\Location;
use App\Models\User;
use App\Models\Time;
use App\Http\Controllers\Controller;
use App\Models\Booking;
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
        return view('frontend.pages.customerlogin');
    }

     public function doLogin(Request $request)
     {
         $request->validate([
          'email'=>'required|email',
           'password'=>'required',
         ]);

       $credentials=$request->except('_token');

       if(auth()->attempt($credentials))
        {
          return redirect()->route('home');
        }
        return redirect()->back()->with('message','Invalid Credentials.');

 }

    public function logout()
    {
        auth()->logout();
        return redirect()->route('customer.login')->with('message','Logout Successful');
    }


        
    
    public function Search(Request $request)
    {
        //  dd(($id)); 
        $route = Route::where('From_location_name',$request->fromAreaCode)
        ->where('To_location_name',$request->toAreaCode)
        ->first();
        if ($route) {
            $trips = Trip::where('route_id', $route->id)->get();
            return view('frontend.pages.search',compact('trips'));
        }
        return redirect()->back();
        

    }
   public function viewseat($id)
   {
    //    dd($id);
       return view('frontend.pages.view',compact('id'));
   } 
    public function seatstore(Request $request)
    {
        // dd($request->all());
        $trip = Trip::find($request->trip_id);
        // dd($trip);
        foreach ($request->seats as $key => $seat) {
            Booking::create([
                'user_id'=>auth()->user()->id,
                'trip_id'=>$request->trip_id,
                'seat_number'=>$seat,
                'date'=>$trip->date,
                'totalAmount'=> $trip->price,
            ]);
        } 
        return redirect()->route('book.view');

   
        
    }
    public function booking(){
       $booking = Booking::with('user')->get();
    //    dd($booking);
       return view('frontend.pages.booking',compact('booking'));
    }
}
