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
     //dd($trips);
      return view('backend.pages.Trip.Triplist',compact('trips'));
    }

    public function tripCreate(){ 
        $routes=Route::all();
        $buses=Bus::all();
       return view('backend.pages.Trip.Create',compact('buses','routes'));
    }

    public function tripStore(Request $request){
    //   dd($request->all());
        $filename=null;
        if($request->hasFile('image')){
            $file=$request->file('image');
            // dd($file);
               $filename = date('Ymdhis').'.'.$file->getClientoriginalExtension();
            //    dd($filename);
               $file ->storeAs('/uploads',$filename);
        }
        
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
public function routeEdit($id){

    $routes = Route::find($id);
    if ($routes) {
    return view('backend.pages.route.edit',compact('routes'));
    } else {
        return redirect()->back();
    }
    
}
}
