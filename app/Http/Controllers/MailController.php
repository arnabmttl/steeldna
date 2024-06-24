<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Mail\SignUp;
use Illuminate\Support\Facades\Mail;

class MailController extends Controller
{
    //

    public function sendMail(Request $request) 
    {
                 
        // Mail::to('arnabm.ttl@gmail.com')->send(new SignUp);  

        $mailData = [
            "name" => "Test NAME",
            "dob" => "12/12/1990"
        ];
    
        Mail::to("arnabm.ttl@gmail.com")->send(new SignUp($mailData));
    
        dd("Mail Sent Successfully!");
        
    }
}
