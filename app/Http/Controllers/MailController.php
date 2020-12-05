<?php

namespace App\Http\Controllers;

use App\Mail\SendMail;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class MailController extends Controller
{
    public function MailSend(){

    	$details = [
           
           'title'=>'This is from system',
           'body'=>'This mail is only for testing perpose'
    	];

    	Mail::to('towhedulislam1994@gmail.com')->send(new SendMail($details));
    	return "Email has been send";
    }
}
