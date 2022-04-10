<?php

namespace App\Http\Controllers;
use App\Mail\ContactMail;

use Illuminate\Http\Request;
use Mail;

class ContactController extends Controller
{
    //
    public function contact()
    {
        return view('contact-us');
    }
    public function sendEmail(Request $request)
    {
        $details=[
            "name"=>$request->name,
            "email"=>$request->email,
            "phone"=>$request->phone,
            "msg"=>$request->msg
        ];
        Mail::to('harsh7499888003@gmail.com')->send(new ContactMail($details));
        return back()->with('message_sent',"your msg has been send");
    }
}
