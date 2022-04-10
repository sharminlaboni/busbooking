<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Booking;


class BookingController extends Controller
{
    public function Booking(){   
        $books = Booking::all();
        return view('backend.pages.Booking.Booklist',compact('books'));

}
public function BookingCreate(){
    return view('backend.pages.Booking.Create');
}
public function BookingStore(Request $request){
    Booking::create([
        // coloum name of db || name of input field
        
        'busname'=>$request->busname,
        'seatname'=>$request->seatname,
        'time'=>$request->time,
        'date'=>$request->date,
        'user'=>$request->user,
        'Amount'=>$request->amount,
        'status'=>$request->status,
    
    ]);
    return redirect()->route('admin.Booking.show');
}

    
}
