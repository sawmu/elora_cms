<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Contacts;
use Mail;

class ContactController extends Controller
{
    public function ContactAll()
    {
        $contacts = Contacts::paginate(6);
        return view('admin.contact.index', compact('contacts'));
    }
    
    public function ContactForm()
    {
        return view('contact');
    }

    public function StoreContactForm(Request $request)
    {
        $request->validate([
            'name' => 'required',
            'email' => 'required|email',
            'phone' => 'required',
            'subject' => 'required',
            'message' => 'required',
        ]);

        $input = $request->all();

        Contacts::create($input);
        //  Send mail to admin
        \Mail::send('contactMail', array(
            'name' => $input['name'],
            'email' => $input['email'],
            'phone' => $input['phone'],
            'subject' => $input['subject'],
            'message' => $input['message'],
        ), function($message) use ($request){
            $message->from($request->email);
            $message->to('sawmukahbaw191@gmail.cim', 'Admin')->subject($request->get('subject'));
        });

        return redirect()->back()->with(['success' => 'Contact Form Submit Successfully']);
    }
}
