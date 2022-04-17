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
// public function BookingCreate(){
//     return view('backend.pages.Booking.Create');
// }
// public function BookingStore(Request $request){
//     Booking::create([
//         // coloum name of db || name of input field
        
//              'user_id'=>auth()->user()->id,
//              'trip_id'=>$request->trip_id,
//                 'seat_number'=>$request->seat,
//              'counter_id'=>$request->counter,
//               'date'=>$request->date,
//             'totalAmount'=> $request->price,
            
    
    // ]);
    // return redirect()->route('admin.Booking.show');


    
}
