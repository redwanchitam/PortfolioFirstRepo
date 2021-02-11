<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Models\Contact;

class ContactController extends Controller
{
    // Store Contact Form data
    public function Contact(Request $request) {
        // Form validation
        $this->validate($request, [
            'name' => 'required',
            'email' => 'required|email',
            'phone' => 'required|regex:/^([0-9\s\-\+\(\)]*)$/|min:10',
            'message' => 'required'
         ]);

        //  Store data in database
        Contact::create($request->all());
            
        //  Send mail to admin
        \Mail::send('mail', array(
            'name' => $request->get('name'),
            'email' => $request->get('email'),
            'phone' => $request->get('phone'),
            'user_query' => $request->get('message'),
        ), function($message) use ($request){
            $message->from($request->email);
            $message->to('der1goiada@gmail.com', 'Admin')->subject("client's message");
        });

        // 
        return back()->with('success', 'I have received your message and would like to thank you for writing to me.');
    }
}
