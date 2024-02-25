<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Contact;


class ContactController extends Controller
{
    public function index(){
        $contacts = Contact::latest()->paginate(5);
        return view('backend.contact', compact('contacts'));
    }
    public function contact_store(Request $request){
        $request->validate([
            'name' =>'required',
            'email' =>'required|email',
            'subject' =>'required',
            'message' =>'required',
        ]);

       $contact = new Contact();
       $contact->name = $request->name;
       $contact->email = $request->email;
       $contact->subject = $request->subject;
       $contact->message = $request->message;
       $contact->save();
       return view('frontend.thankyou');
    }
}
