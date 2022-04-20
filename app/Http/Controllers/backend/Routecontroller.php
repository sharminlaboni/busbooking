<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Route;
use App\Models\Location;


class RouteController extends Controller
{
   public function route(){   
         $routes = Route::with('fromLocation','toLocation')->get();
        //  dd($routes);
         return view('backend.pages.Route.Routelist',compact('routes'));

}
    public function routeFrom(){
        $locations = Location::all();
        return view('backend.pages.Route.Create',compact('locations'));
    }

    public function routePost(Request $request){
        // dd($request->all());
        Route::create([
            // coloum name of DB || name of input field
            'From_location_name'=>$request->From_Location_id,
            'To_location_name'=>$request->To_Location_id,
        ]);        
         



        return redirect()->route('admin.route.show');

    }
    public function routeEdit($id){

        $routes = Route::find($id);
        $locations = Location::all();
        if ($routes) {
        return view('backend.pages.route.edit',compact('routes','locations'));
        } else {
            return redirect()->back();
        }
        
}
public function routeUpdate(Request $request){
    //  dd($request->all());
    $locations = Location::all();
    $routes = Route::find($request->route_id);
    if ($routes) {
        $routes->update([
            'From_location_name'=>$request->From_Location_id,
            'To_location_name'=>$request->To_Location_id,
        ]);
        return redirect()->route('admin.route.show');
    } else {
        return redirect()->back();
    }
}
public function routeDelete($id){
    $routes = Route::find($id);
    if($routes){
        $routes->delete();
        return redirect()->back();
    }else{
        return redirect()->back();

    
    }
}

}