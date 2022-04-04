<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Counter;



class CounterController extends Controller
{
    public function Counter(){
        $counters = Counter::all();
        return view('backend.pages.Counter.Counterlist',compact('counters'));
       }

       public function CounterCreate(){
        return view('backend.pages.Counter.Create');
    } 
    public function CounterStore(Request $request){
        Counter::create([
            // coloum name of db || name of input field
            'counter_name'=> $request->counter_name,
            'counter_number'=> $request->counter_number,
            ]);
        return redirect()->route('admin.Counter.show');
    }
    
    public function CounterEdit($id){
        $counters=Counter::find($id);
        if ($counters) {
        return view('backend.pages.Counter.edit',compact('counters'));
        } else {
            return redirect()->back();
        }
        
    } 
    public function CounterUpdate(Request $request){
        // dd($request->all());
        $counters = Counter::find($request->id);
        if ($counters) { 
            $counters->update([
            'counter_name'=> $request->counter_name,
            'counter_number'=> $request->counter_number,
            
        
                
            ]);
            return redirect()->route('admin.Counter.show');
        } else {
            return redirect()->back();
        }
    }
        public function CounterDelete($id){
            $counters = Counter::find($id);
            if($counters){
                $counters->delete();
                return redirect()->back();
            }else{
                return redirect()->back();
        
            
            }
        }
    
    

}