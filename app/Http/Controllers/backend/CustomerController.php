<?php

namespace App\Http\Controllers\Backend;
use App\Http\Controllers\Controller;

use Illuminate\Http\Request;
use App\Models\Customer;

class CustomerController extends Controller
{
    public function Customer(){
        $customers = Customer::all();
        return view('backend.pages.Customer.Customerlist',compact('customers'));
       }
       
       public function CustomerCreate(){
        return view('backend.pages.Customer.Create');
    }
    public function CustomerStore(Request $request){
        Customer::create([
            // coloum name of db || name of input field
            'name'=> $request->name,
            
            'email'=> $request->customeremail,
            'password'=> $request->password,


            
            
        ]);
        return redirect()->route('admin.Customer.show');
    }
    public function CustomerEdit($id){
        $customers=Customer::find($id);
        if ($customers) {
        return view('backend.pages.Customer.edit',compact('customers'));
        } else {
            return redirect()->back();
        }
        
    }  
    public function CustomerUpdate(Request $request){
        // dd($request->all());
        $customers = Customer::find($request->id);
        if ($customers) { 
            $customers->update([
                'name'=> $request->name,
                
                'email'=> $request->email,
                'password'=> $request->password,

            
        
                
            ]);
            return redirect()->route('admin.Customer.show');
        } else {
            return redirect()->back();
        }
    }

    public function CustomerDelete($id){
        $customers = Customer::find($id);
        if($customers){
            $customers->delete();
            return redirect()->back();
        }else{
            return redirect()->back();
    
    
        }
        Customer::create([
            'name'=>$request->name,
                'email'=>$request->email,
                'password'=>bcrypt($request->password),



        ]);
        return redirect()->back();

    }



    
    //
}
