<?php

namespace App\Http\Controllers\Frontend;
use App\Models\Location;
use App\Models\User;
use App\Models\Time;
use App\Http\Controllers\Controller;
use App\Models\Booking;
use App\Models\Counter;
use App\Models\Route;
use App\Models\Trip;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

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
                'contact'=>'required',
                'address'=>'required',


            ]);
            User::create([
                'name'=>$request->name,
                'email'=>$request->email,
                'password'=>bcrypt($request->password),
                'role'=>'customer',
                'contact'=>$request->contact,
                'address'=>$request->address,



            ]);
            return redirect()->route('home');
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
        return redirect()->route('home')->with('message','Logout Successful');
    }
    public  function myprofile()
    {
        // dd(auth()->user());
        $user = auth()->user();
        $booking = Booking::where('user_id',auth()->user()->id)->get();
        //dd($booking);
        return view('frontend.pages.myprofile',compact('user','booking'));
    }

        
    
    public function Search(Request $request)
    {
        // dd($request->all());
        $date = date('Y-m-d',strtotime($request->travelDate));
        // dd($date);
        $route = Route::where('From_location_name',$request->fromAreaCode)
        ->where('To_location_name',$request->toAreaCode)
        ->first();
        if ($route) {
            $trips = Trip::where('route_id', $route->id)
                            ->whereDate('date',$date)
                            ->where('time_id',$request->timePeriod)
                            ->get();
                            // dd($trips);
            return view('frontend.pages.search',compact('trips'));
        }
        return redirect()->back();
        

    }
   public function viewseat($id)
   {

    //    dd($id);
    $trip = Trip::find($id);
    $route = Route::where('id',$trip->route_id)->first();
    $location = Location::where('id',$route->From_location_name)->first();
    $counter = Counter::where('location_id',$location->id)->get();
    $bookings = Booking::where('trip_id',$id)->get()->pluck('seat_number')->toArray();
 
    
    return view('frontend.pages.view',compact('id','counter','bookings'));
   } 
    public function seatstore(Request $request)
    {
        
        $trip = Trip::find($request->trip_id);
        // dd($trip);
        foreach ($request->seats as $key => $seat) {
            Booking::create([
                'user_id'=>auth()->user()->id,
                'trip_id'=>$request->trip_id,
                'seat_number'=>$seat,
                'counter_id'=>$request->counter,
                'booking_status'=>'pending',

                'date'=>$trip->date,
                'totalAmount'=> $trip->price,
            ]);
        } 
        return redirect()->route('book.view');

   
        
    }
    public function booking(){
       
        $booking=Booking::query()->with('user','counter')->get()->groupBy('user_id','trip_id');
     
       return view('frontend.pages.booking',compact('booking'));
    }
}
