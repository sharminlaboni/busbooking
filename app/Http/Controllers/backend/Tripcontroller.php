<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Trip;

class TripController extends Controller
{

    public function trip(){
     $trips = Trip::all();
    return view('backend.pages.Trip.Triplist',compact('trips'));
    }

    public function tripCreate(){
        return view('backend.pages.Trip.Create');
    }

    public function tripStore(Request $request){
        Trip::create([
            // coloum name of db || name of input field
            'name'=> $request->name,
            'route_id'=> 1 ,
            'time'=> $request->time,
            'price'=>$request->price,
            'details'=>$request->details,
        ]);
        return redirect()->route('admin.trip.show');
    }
}
