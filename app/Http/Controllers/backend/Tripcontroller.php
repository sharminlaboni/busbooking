<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class Tripcontroller extends Controller
{
    public function tripFrom(){
        return view('backend.pages.trip.create');
    }
    public function tripPost(Request $request){
        //dd(request->all());
        Trip::create([
            'name'->$request->Trip_name,
            'details'->$request->Trip_details
        ]);
        return redirect()->back();
    }
    
}
