<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Bus;


class BusController extends Controller
{
    public function Bus(){   
        $buses = Bus::all();
        return view('backend.pages.Bus.Buslist',compact('buses'));

}
   public function BusCreate(){
       return view('backend.pages.Bus.Create');
   }

   public function BusStore(Request $request){
       // dd($request->all());
       Bus::create([
           // coloum name of DB || name of input field
           'Bus_name'=>$request->Bus_name,
           'Bus_number'=>$request->Bus_number,
           'Bus_type'=>$request->Bus_type,
            
       ]);

       return redirect()->route('admin.Bus.show');

   }
   public function busEdit($id){

    $buses = Bus::find($id);
    if ($buses) {
    return view('backend.pages.bus.edit',compact('buses'));
    } else {
        return redirect()->back();
    }
    
}
public function busUpdate(Request $request){
    // dd($request->all());
    $buses = Bus::find($request->Bus_id);
    if ($buses) {
        $buses->update([
            'Bus_name'=>$request->Bus_name,
           'Bus_number'=>$request->Bus_number,
           'Bus_type'=>$request->Bus_type,
            
            
        ]);
        return redirect()->route('admin.Bus.show');
    } else {
        return redirect()->back();
    }
}
    public function busDelete($id){
        $buses = Bus::find($id);
        if($buses){
            $buses->delete();
            return redirect()->back();
        }else{
            return redirect()->back();
  
        
        }
    }
}
