<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Notification;

class notificationController extends Controller
{
    public function store(Request $request){
    $notification = new Notification();
    $notification->user_id = $request->user_id;
    $notification->title = $request->title;
    $notification->body = $request->body;
    $notification->is_read = $request->is_read ?? false;
    $notification->save();

    return response()->json([
        'status' => 'success',
         'message' => 'Notification sent successfully!',
         'data' => $notification ,201
         ]);
   }
}
