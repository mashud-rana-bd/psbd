<?php

namespace App\Http\Controllers;



use Illuminate\Http\Request;
use App\Http\Requests\ContactRequest;
use Mail;
use App\Mail\NewContactRequest;



class ContactController extends Controller
{

    public function viewContact()
    {
        return view('frontends.contact');
    }
    public function sendMail(ContactRequest $request)
    {
        if ($request->isMethod('post')) {
            Mail::to('contact@photodesignexpert.com')->send(new NewContactRequest($request));
            return back()->with('status','your message has been recieved');
        }
        // $levels = Category::where(['parent_id'=>0])->get();
       
    }
}
