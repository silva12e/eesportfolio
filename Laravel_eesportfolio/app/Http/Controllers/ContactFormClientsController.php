<?php
namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Http\Requests;
use App\ContactFormClients;
use Illuminate\Support\Facades\Input;

use Mail;
use App\Mail\ContactInfoConfirmation;
class ContactFormClientsController extends Controller
{
    public function create()
    {
    	return View('pages.contact-information');
    }
    public function store(Request $request)
    {
    	        $this->validate($request, [
        		'name' => 'required',
        		'email' => 'required|email',
        		'phone' => 'required',
        		'comments' => 'required',
        	]);
        $email = Input::get('email');//change this later
        ContactFormClients::create($request->all());
        Mail::to($email)->send(new ContactInfoConfirmation());
        return back()->with('success', 'Thanks! I will get back to you as soon as possible.');
    }
}
