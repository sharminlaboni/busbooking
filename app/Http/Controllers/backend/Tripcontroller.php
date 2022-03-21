<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Trip;
use App\Models\Route;



class TripController extends Controller
{

    public function trip(){
     $trips = Trip::with('route')->get();
    return view('backend.pages.Trip.Triplist',compact('trips'));
    }

    public function tripCreate(){
        $routes=Route::all();
        return view('backend.pages.Trip.Create',compact('routes'));
    }

    public function tripStore(Request $request){
        Trip::create([
            // coloum name of db || name of input field
            'name'=> $request->name,
            'route_id'=>$request->route_id,
            'time'=> $request->time,
            'price'=>$request->price,
            'details'=>$request->details,
        ]);
        return redirect()->route('admin.trip.show');
    }
}
