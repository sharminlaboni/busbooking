<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Route;

class RouteController extends Controller
{
   public function route(){   
         $routes = Route::all();
         return view('backend.pages.Route.Routelist',compact('routes'));

}
    public function routeFrom(){
        return view('backend.pages.Route.Create');
    }

    public function routePost(Request $request){
        // dd($request->all());hy
        Route::create([
            // coloum name of DB || name of input field
            'name'=>$request->Route_name,
            'details'=>$request->Route_details
        ]);

        return redirect()->route('admin.route.show');

    }
    public function routeEdit($id){

        $routes = Route::find($id);
        if ($routes) {
        return view('backend.pages.route.edit',compact('routes'));
        } else {
            return redirect()->back();
        }
        
}
public function routeUpdate(Request $request){
    // dd($request->all());
    $routes = route::find($request->route_id);
    if ($routes) {
        $routes->update([
            'name'=>$request->Route_name,
            'details'=>$request->Route_details
            
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