<?php

namespace App\Http\Controllers\Frontend\Contact;

use App\Http\Controllers\Controller;
use App\Model\User\Message;
use Mail;
use Auth;
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
        // $this->middleware('auth');
    }
    public function show()
    {
        return view("public.contact.index");
    }
    public function send(Request $request)
    {
        $this->validate(
            $request,
            [
            'name' => 'required|string|max:60',
            'email' => 'required|string',
            'message' => 'required|string'
        ],
            [
                'name.required'=>"نامتان را وارد کنید",
                'email.required'=>"ایمیلتان را وارد کنید",
                'message.required'=>"پیامتان را وارد کنید",
            ]
        );


        Message::create($request->all());
        $email = Mail::send(
            'public.contact.mail',
            array(
                'name' => $request->name,
                'email' => $request->email,
                'messages' => $request->message
            ),
            function ($message) use ($request) {
                $user =$request->email;
                $message->from($user);
                $message->to('siyamak1981@gmail.com')->subject('Contact message');
            },
        );
        return back()->with('message', 'پیامتان با موفقیت ارسال شد متشکریم!');
        if (!$user) {
            return redirect(route('register'));
        }
    }
}
