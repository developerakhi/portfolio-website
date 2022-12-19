<?php

namespace App\Http\Controllers;

use App\Mail\ContactFormMail;
use App\Mail\SendMail;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class ContactFormController extends Controller
{

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function store(Request $request){
       
        $contact_form_data = request()->all();

        $send_mail = "akhim258@gmail.com";

        Mail::to($send_mail)->send(new SendMail($contact_form_data));

        return redirect()->back()->with('success', 'Your message has been submitted successfully.');
    }
}
