<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use App\Models\Location;


use Illuminate\Http\Request;

class LocationController extends Controller
{
    public function location(){
        $locations = Location::all();
        return view('backend.pages.Location.Locationlist',compact('locations'));
       }

       public function LocationCreate(){
        return view('backend.pages.Location.Create');
    } 
    public function LocationStore(Request $request){
        Location::create([
            // coloum name of db || name of input field
            'Location_name'=> $request->Location_name,
            
            ]);
        return redirect()->route('admin.location.show');
    }
    
    public function LocationEdit($id){
        $locations=Location::find($id);
        if ($locations) {
        return view('backend.pages.Location.edit',compact('locations'));
        } else {
            return redirect()->back();
        }
        
    } 
    public function LocationUpdate(Request $request){
        // dd($request->all());
        $locations = Location::find($request->id);
        if ($locations) { 
            $locations->update([            
            'Location_name'=> $request->Location_name,
        ]);
            return redirect()->route('admin.location.show');
        } else {
            return redirect()->back();
        }
    }
        public function LocationDelete($id){
            $locations = Location::find($id);
            if($locations){
                $locations->delete();
                return redirect()->back();
            }else{
                return redirect()->back();
        
            
            }
        }
    
    
}
