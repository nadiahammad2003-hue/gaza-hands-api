<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Donation;

class donationController extends Controller
{
     public function store(Request $request){
    $donation = new Donation();
    $donation->user_id = $request->user_id;
    $donation->project_id = $request->project_id;
    $donation->amount = $request->amount;
    $donation->payment_method = $request->payment_method;
    $donation->payment_status = $request->payment_status;
    $donation->transaction_id = $request->transaction_id;

    $donation->save();

    return response()->json([
      'status' => 'success',
       'message' => 'Donation recorded successfully!',
       'data' => $donation ,201
       ]);
   }
}
