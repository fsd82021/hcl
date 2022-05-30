<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\ReplyRequest;
use App\Models\quote;
use Illuminate\Support\Facades\Mail;

class requestsController extends Controller
{
    public function index(){
        $data = quote::paginate(20);
        return view('admin.requests.index', compact('data'));
    }
    public function show($id)
    {
        $data = quote::findorfail($id);
        return view('admin.requests.show', compact('data'));
    }
    public function show_reply($id)
    {
        $data = quote::find($id);
        return view('admin.contact.show-reply', compact('data'));
    }

    public function contact_reply(ReplyRequest $request)
    {
        $contact = quote::find($request->contact_id);

        $user_email   = $contact->email;   //user email
        $user_name    = $contact->name;    //user name
        $user_message = $request->message; //admin message
        $subject      = $request->subject; //email subject

        Mail::send('mail.admin_replay', [
            'user_email'   =>  $user_email,
            'user_name'    =>  $user_name,
            'user_message' =>  $user_message

        ], function ($message) use ($user_email, $user_name, $subject) {
            $message->from(env('MAIL_USERNAME'));
            $message->to($user_email, $user_name)->subject($subject);
        });
        return redirect()->route('admin.contact.index')->with(['success' => trans('contact.mail_sent')]);
    }

}
