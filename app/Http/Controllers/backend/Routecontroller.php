<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class Routecontroller extends Controller
{
    public function routeFrom(){
        return view('backend.pages.route.create');
    }
    public function routePost(Request $request){
        //dd(request->all());
        Trip::create([
            'name'->$request->Route_name,
            'details'->$request->Route_details
        ]);
        return redirect()->back();
    }
    
}
