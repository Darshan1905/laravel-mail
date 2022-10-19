<?php

namespace App\Http\Controllers;

// use App\Mail\ContactMail;
use Illuminate\Http\Request;
use App\Models\Contact;
use Illuminate\Support\Facades\Mail;


class Contactuscontroller extends Controller
{
    public function sendEmail(Request $req){

        $req->validate([
            "name" => 'required',
            "email" => 'required|email',
            "msg" => 'required'
        ]);

        $data = [
            "name"=>$req->name,
            "email"=>$req->email,
            "msg"=>$req->msg
        ];
        Contact::create($data);
        Mail::send('email',$data,function($message) use ($data){

            // $message->to($data['email']);
            $message->to('skyweb1905@gmail.com');
            $message->subject('Mail from Website');
        
        });

        return back()->with(['message' => 'Email sent successfully, We will get in touch with you as soon as posible.']);
            
    }
}
