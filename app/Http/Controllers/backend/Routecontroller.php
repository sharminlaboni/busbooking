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
        // dd($request->all());
        Route::create([
            // coloum name of DB || name of input field
            'name'=>$request->Route_name,
            'details'=>$request->Route_details
        ]);

        return redirect()->route('admin.route.show');

    }
}
