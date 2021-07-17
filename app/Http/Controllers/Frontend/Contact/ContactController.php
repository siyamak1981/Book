<?php

namespace App\Http\Controllers\Frontend\Contact;

use App\Http\Controllers\Controller;
use App\Models\Contact;
use Mail; 
use Illuminate\Http\Request;

class ContactController extends Controller
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

    public function getContact()
    {
        return view("Frontend.contact.index");
    }
    public function saveContact(Request $request)
    {
     
        $this->validate($request, [
            'first_name' => 'required',
            'last_name' => 'required',
            'email' => 'required|email',
            'phone_number' => 'required',
            'message' => 'required'
        ]);

        $contact = new Contact;

        $contact->first_name = $request->first_name;
        $contact->last_name = $request->first_name;
        $contact->email = $request->email;
        $contact->subject = $request->subject;
        $contact->phone_number = $request->phone_number;
        $contact->message = $request->message;

        $contact->save();
        \Mail::send('Frontend.contact.contact_email',
             array(
                 'first_name' => $request->get('first_name'),
                 'last_name' => $request->get('last_name'),
                 'email' => $request->get('email'),
                 'subject' => $request->get('subject'),
                 'phone_number' => $request->get('phone_number'),
                 'user_message' => $request->get('message'),
             ), function($message) use ($request)
               {
                  $message->from($request->email);
                  $message->to('siyamak1981@gmail.com');
               });
        
        return back()->with('message', 'از اینکه با ما تماس گرفتید متشکریم');
        if (!$request->email) {
            return redirect(route('register'));
        }
    }
}
