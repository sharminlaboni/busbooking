<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Trip;
use App\Models\Route;
use App\Models\Bus;
use App\Models\Time;



class TripController extends Controller
{

    public function trip(){
     $trips = Trip::with('route','Bus')->get();
    //  dd($trips);
      return view('backend.pages.Trip.Triplist',compact('trips'));
    }

    public function tripCreate(){ 
        $routes=Route::all();
        // dd($routes);
        $buses=Bus::all();
        $times=Time::all();
       return view('backend.pages.Trip.Create',compact('buses','routes','times'));
    }

    public function tripStore(Request $request){
        // dd($request->all());
        $request->validate([
        'Bus_id'=> 'required',
        'bus_type'=>'required',
        'route_id'=>'required',
        'date'=>'required',
        'time_id'=> 'required',
        'price'=>'required',
        'details'=>'required',
        'image'=>'image',

        ]);
      //dd($request->all());
        $filename=null;
        if($request->hasFile('image')){
            $file=$request->file('image');
            // dd($file);
               $filename = date('Ymdhis').'.'.$file->getClientoriginalExtension();
            //    dd($filename);
               $file ->storeAs('/uploads',$filename);
        }
               //dd($request->all());

        Trip::create([
            // coloum name of db || name of input field
            'Bus_id'=> $request->Bus_id,
            'bus_type'=>$request->bus_type,
            'route_id'=>$request->route_id,
            'date'=>$request->date,
            'time_id'=> $request->time_id,
            'price'=>$request->price,
            'details'=>$request->details,
            'image'=>$filename,
        ]);
        return redirect()->route('admin.trip.show');
}
public function tripEdit($id){
    $routes=Route::all();

    // dd($routes);
    $buses=Bus::all();
    $times=Time::all();

    $trips = Trip::find($id);
    if ($trips) {
    return view('backend.pages.trip.edit',compact('trips','buses','routes','times'));
    } else {
        return redirect()->back();
    }
    
}
public function tripUpdate(Request $request){
//dd($request->all());
    
 
 $routes=Route::all();
    
    $buses=Bus::all();
    $times=Time::all();
    $trips = Trip::find($request->trip_id);
    if ($trips) { 
        $trips->update([
        'Bus_id'=> $request->Bus_id,
        'bus_type'=>$request->bus_type,
        'route_id'=>$request->route_id,
        'date'=>$request->date,
        'time_id'=>$request->time_id,
        'price'=>$request->price,
        'details'=>$request->details,
        //'image'=>$filename,
            
        ]);
        return redirect()->route('admin.trip.show');
    } else {
        return redirect()->back();
    }
}



public function tripDelete($id){
    $trips = Trip::find($id);
    if($trips){
        $trips->delete();
        return redirect()->back();
    }else{
        return redirect()->back();

    
    }
}

}
