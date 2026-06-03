<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Message;

class messageController extends Controller
{
    public function store(Request $request){
    $message = new Message();
    $message->sender_id = $request->sender_id;
    $message->receiver_id = $request->receiver_id;
    $message->message = $request->message;
    $message->image = $request->image;
    $message->is_read = $request->is_read ?? false;
    $message->save();

    return response()->json(['status' => 'success', 'message' => 'Message sent successfully!','data' => $message ,201]);
   }
}
