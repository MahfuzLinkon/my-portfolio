<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use App\Models\Message;
use Illuminate\Http\Request;

class BackendMessageController extends Controller
{
    public function manageMessage(){
        return view('admin.message.index', [
            'messages' =>Message::latest()->get(),
        ]);
    }

    public function readMessage($id){
        $message = Message::find($id);
        if($message->status == 1){
            $message->status = 0;
            $notification = 'Message Marked As Read';
        }else{
            $message->status = 1;
            $notification = 'Message Marked As Unread';
        }
        $message->save();
        return redirect()->back()->with('success', $notification);
    }

    public function deleteMessage($id){
        Message::find($id)->delete();
        return redirect()->back()->with('success', 'Message Deleted successfully');
    }














}
