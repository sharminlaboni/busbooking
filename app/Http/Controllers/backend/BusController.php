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
       ]);

       return redirect()->route('admin.Bus.show');

   }
}
