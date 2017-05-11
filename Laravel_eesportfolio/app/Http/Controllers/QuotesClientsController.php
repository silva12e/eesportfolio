<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests;
use App\quotesClients;
use Illuminate\Support\Facades\Input;
use Mail;
use App\Mail\QuoteContactMessage;

class QuotesClientsController extends Controller
{
    
   public function store(Request $request)
    {
    	        $this->validate($request, [
        		'name' => 'required',
        		'email' => 'required|email',
        		'comments' => 'required'
        	]);
        $email = Input::get('email');//change this later
        quotesClients::create($request->all());
        Mail::to($email)->send(new QuoteContactMessage());
        return back()->with('success', 'Your message has been submited! You should receive an email shortly.');
    }
        

}
