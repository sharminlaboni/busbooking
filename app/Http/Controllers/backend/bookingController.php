<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Booking;


class BookingController extends Controller
{
    public function Booking(){   
        $booking = Booking::all();
        return view('backend.pages.Booking.Booklist',compact('booking'));

}


    
}
