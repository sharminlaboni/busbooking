<?php

namespace App\Http\Controllers\Frontend;
use App\Models\Location;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class HomeController extends Controller
{
        public function home(){
           $locations = Location::all();
           return view('frontend.pages.home',compact('locations')); 
        }
    //
}
