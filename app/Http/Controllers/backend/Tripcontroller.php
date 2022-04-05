<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Trip;
use App\Models\Route;
use App\Models\Bus;



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
       return view('backend.pages.Trip.Create',compact('buses','routes'));
    }

    public function tripStore(Request $request){
        $request->validate([
        'Bus_id'=> 'required',
        'route_id'=>'required',
        'time'=> 'required',
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
              //   dd($request->all());

        Trip::create([
            // coloum name of db || name of input field
            'Bus_id'=> $request->Bus_id,
            'route_id'=>$request->route_id,
            'time'=> $request->time,
            'price'=>$request->price,
            'details'=>$request->details,
            'image'=>$filename,
        ]);
        return redirect()->route('admin.trip.show');
}
public function tripEdit($id){
    $routes=Route::all();
    $buses=Bus::all();


    $trips = Trip::find($id);
    if ($trips) {
    return view('backend.pages.trip.edit',compact('trips','buses','routes'));
    } else {
        return redirect()->back();
    }
    
}
public function tripUpdate(Request $request){
    // dd($request->all());
    $trips = Trip::find($request->trip_id);
    if ($trips) { 
        $trips->update([
        'Bus_id'=> $request->Bus_id,
        'route_id'=>$request->route_id,
        'time'=> $request->time,
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
