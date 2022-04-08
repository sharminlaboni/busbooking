<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Time;


class TimeController extends Controller
{
    public function time(){   
        $times = Time::all();
        return view('backend.pages.time.timelist',compact('times'));

}
   public function timeCreate(){
       return view('backend.pages.time.Create');
   }

   public function timeStore(Request $request){
       // dd($request->all());
       Time::create([
           // coloum name of DB || name of input field
           'time'=>$request->time,
       ]);

       return redirect()->route('admin.time.show');

   }
}
