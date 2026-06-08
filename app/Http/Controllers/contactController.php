<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Contact;

class contactController extends Controller
{
   public function store(Request $request){
    $contact = new Contact();
    $contact->name = $request->name;
    $contact->email = $request->email;
    $contact->phone = $request->phone;
    $contact->subject = $request->subject;
    $contact->message = $request->message;
    $contact->save();

    return response()->json([
      'status' => 'success',
       'message' => 'Message sent successfully!',
       'data' => $contact ,201
       ]);
   }
}
