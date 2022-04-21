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
   public function timeEdit($id){

    $times = Time::find($id);

    if ($times) {
    return view('backend.pages.time.edit',compact('times'));
    } else {
        return redirect()->back();
    }
    
}
public function timeUpdate(Request $request){
    //  dd($request->all());
    $times = Time::find($request->time_id);
    if ($times) {
        $times->update([
            'time'=>$request->time,

        ]);
        return redirect()->route('admin.time.show');
    } else {
        return redirect()->back();
    }
}
public function timeDelete($id){
    $times = Time::find($id);
    if($times){
        $times->delete();
        return redirect()->back();
    }else{
        return redirect()->back();

    
    }
}

}
