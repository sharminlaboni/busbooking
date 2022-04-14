<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use App\Models\Booking;
use Illuminate\Http\Request;

class BookingdetailsController extends Controller
{
    public function viewinvoivce($id){
        $booking = Booking::find($id);
        return view('frontend.pages.invoice',compact('booking'));

    }

}
