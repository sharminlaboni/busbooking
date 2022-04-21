<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Driver;



class DriverController extends Controller
{
    public function driver(){   
        $drivers = Driver::all();
        return view('backend.pages.Driver.Driverlist',compact('drivers'));

}
public function driverCreate(){
    return view('backend.pages.Driver.Create');
}

public function driverStore(Request $request){
    // dd($request->all());
    Driver::create([
        // coloum name of DB || name of input field

        'Driver_name'=>$request->Driver_name,
        'Driver_id'=>$request->Driver_id,
        'Driver_phone'=>$request->Driver_phone,
        'Bus_name'=>$request->Bus_name,
        'Bus_type'=>$request->Bus_type,
    ]);


    return redirect()->route('admin.driver.show');

}
public function driverEdit($id){

    $drivers = Driver::find($id);

    if ($drivers) {
    return view('backend.pages.Driver.edit',compact('drivers'));
    } else {
        return redirect()->back();
    }
    
}
public function driverUpdate(Request $request){
    //  dd($request->all());
    $drivers = Driver::find($request->driver_id);
    if ($drivers) {
        $drivers->update([
            'Driver_name'=>$request->Driver_name,
            'Driver_id'=>$request->Driver_id,
            'Driver_phone'=>$request->Driver_phone,
            'Bus_name'=>$request->Bus_name,
            'Bus_type'=>$request->Bus_type,  
            
        ]);
        return redirect()->route('admin.driver.show');
    } else {
        return redirect()->back();
    }
}
public function driverDelete($id){
    $drivers = Driver::find($id);
    if($drivers){
        $drivers->delete();
        return redirect()->back();
    }else{
        return redirect()->back();

    
    }
}


}
