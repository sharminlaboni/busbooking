<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\User;
use App\Models\Trip;
use App\Models\Booking;
use App\Models\Route;
use App\Models\Bus;
use App\Models\Counter;
use App\Models\Driver;




use Carbon\Carbon;








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

        $total_bus=Bus::all()->count();
        $total_counter=Counter::all()->count();
        $total_driver=Driver::all()->count();






        return view('backend.pages.dashboard',compact('total_trip','total_customer','total_booking','total_route','total_bus','total_counter','total_driver'));
    }

    public function report()
    {
    
    return view('backend.pages.Report.report');
}
public function tripreport(Request $request){
    // dd($request->all());

    $toDate = Carbon::parse($request->to_date)->addDay();
    $trips = Trip::WhereBetween('created_at',[$request->from_date,$toDate])->get();
    return view('backend.pages.Report.tripreport',compact('trips'));

}
public function bookreport()
    {
    
    return view('backend.pages.Reportbooking.bookreport');
}
public function getreport(Request $request){
    // dd($request->all());

    $toDate = Carbon::parse($request->to_date)->addDay();
    $booking = Booking::WhereBetween('created_at',[$request->from_date,$toDate])->get();
    return view('backend.pages.Reportbooking.bookingreport',compact('booking'));

}

 public function userdelete($id){
     $users = User::find($id);
     if($users){
         $users->delete();
         return redirect()->back();
   }else{
        return redirect()->back();

    
}

 }

}

