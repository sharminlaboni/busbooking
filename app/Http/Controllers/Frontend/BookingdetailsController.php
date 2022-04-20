<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use App\Models\Booking;
use App\Models\Trip;
use Illuminate\Http\Request;

class BookingdetailsController extends Controller
{
    public function viewinvoivce($id){
        $booking = Booking::find($id);
        return view('frontend.pages.invoice',compact('booking'));

    }
    public function viewticket(){
        $trips= Trip::all();
        
        return view('frontend.pages.ticket',compact('trips'));

    }

}
