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
            'customername'=> $request->customername,
            
            'customercontact'=> $request->customercontact,
            
            'customeremail'=>$request->customeremail,
        ]);
        return redirect()->route('admin.Customer.show');
    }
    
    //
}
