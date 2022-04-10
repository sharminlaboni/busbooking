<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Payment;


class PaymentController extends Controller
{
    public function payment(){
        $payment = Payment::all();
        return view('backend.pages.Payment.payment',compact('payment'));
    }
}
