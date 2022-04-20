<?php

namespace App\Http\Controllers;
use App\Models\Trip;
use App\Models\Booking;
// use App\Models\User;

use DB;
use Illuminate\Http\Request;
use App\Library\SslCommerz\SslCommerzNotification;

class SslCommerzPaymentController extends Controller
{

    // public function exampleEasyCheckout()
    // {
    //     return view('exampleEasycheckout');
    // }

    // public function exampleHostedCheckout()
    // {
    //     return view('exampleHosted');
    // }

    public function index(Request $request)
    {
       
    
        $trip=Trip::find($request->trip_id);

        $post_data = array();
        $post_data['total_amount'] =$trip->price*count($request->seats) ; # You cant not pay less than 
        $post_data['currency'] = "BDT";
        $post_data['tran_id'] = uniqid(); // tran_id must be unique

        # CUSTOMER INFORMATION
        $post_data['cus_name'] =  auth()->user()->name ;
        $post_data['cus_email'] =  auth()->user()->email;
        $post_data['cus_add1'] = auth()->user()->address;
        $post_data['cus_add2'] = "";
        $post_data['cus_add2'] = "";
        $post_data['cus_city'] = "";
        $post_data['cus_state'] = "";
        $post_data['cus_postcode'] = "";
        $post_data['cus_country'] = "Bangladesh";
        $post_data['cus_phone'] = '8801857377860';
        $post_data['cus_fax'] = "";

        # SHIPMENT INFORMATION
        $post_data['ship_name'] = "Store Test";
        $post_data['ship_add1'] = "Dhaka";
        $post_data['ship_add2'] = "Dhaka";
        $post_data['ship_city'] = "Dhaka";
        $post_data['ship_state'] = "Dhaka";
        $post_data['ship_postcode'] = "1000";
        $post_data['ship_phone'] = "";
        $post_data['ship_country'] = "Bangladesh";

        $post_data['shipping_method'] = "NO";
        $post_data['product_name'] = "bus";
        $post_data['product_category'] = "Reservation";
        $post_data['product_profile'] = "physical-goods";

        # OPTIONAL PARAMETERS
        $post_data['value_a'] = "ref001";
        $post_data['value_b'] = "ref002";
        $post_data['value_c'] = "ref003";
        $post_data['value_d'] = "ref004";

        #Before  going to initiate the payment order status need to insert or update as Pending.
      
       
         //dd($trip);
        foreach ($request->seats as $key => $seat) {
            Booking::create([
                'user_id'=>auth()->user()->id,
                'tran_id'=>$post_data['tran_id'],
                'trip_id'=>$request->trip_id,
                'seat_number'=>$seat,
                'booking_status'=>'pending',
                'counter_id'=>$request->counter,
                'date'=>$trip->date,
                'totalAmount'=> $trip->price * count($request->seats),
            ]);
        }
        $sslc = new SslCommerzNotification();
        # initiate(Transaction Data , false: Redirect to SSLCOMMERZ gateway/ true: Show all the Payement gateway here )
        $payment_options = $sslc->makePayment($post_data, 'hosted');

        if (!is_array($payment_options)) {
            print_r($payment_options);
            $payment_options = array();
        }

    }
    
    public function success(Request $request)
    {
    
// dd($request->all());
        $tran_id = $request->input('tran_id');
        $amount = $request->input('amount');
        $currency = $request->input('currency');

        $sslc = new SslCommerzNotification();

        #Check order status in order tabel against the transaction id or order id.
        $booking = Booking::query()->where('tran_id',$tran_id)->update(['booking_status'=>'success']);
            
     
        return redirect()->route('book.view');
        }


    

    public function fail(Request $request)
    {
        
        $tran_id = $request->input('tran_id');

        $booking = Booking::query()->where('tran_id',$tran_id)->update(['booking_status'=>'failed']);
            
     
        return redirect()->route('book.view');
        }

       

    


    Public function cancel(Request $request)

    {
        $tran_id = $request->input('tran_id');

        $booking = Booking::query()->where('tran_id',$tran_id)->update(['booking_status'=>'cancel']);
            
     
        return redirect()->route('book.view');
        }


    }
    

