<?php

namespace App\Http\Controllers\Hospital;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\User;

use App\Models\Message;

class MessageController extends Controller
{
    //
    public function store(Request $request)
    {

        $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|email|max:255',
            'phone' => 'nullable|string|max:15',
            'subject' => 'required|string|max:255',
            'message' => 'required|string',
        ]);

        // Create a new message instance
        $message = new Message();
        $message->name = $request->input('name');
        $message->email = $request->input('email');
        $message->subject = $request->input('subject');
        $message->phone = $request->input('phone', null); // Default to null if not provided
        $message->message = $request->input('message');
        $message->save();

        return redirect()->back()->with('success', 'Message sent successfully!');
    }
}
