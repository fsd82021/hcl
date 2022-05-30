<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\ReplyRequest;
use App\Models\Contact;
use Illuminate\Support\Facades\Mail;

class ContactController extends Controller
{
    public function index()
    {
        $data = Contact::paginate(20);
        return view('admin.contact.index', compact('data'));
    }
    public function show($id)
    {
        $data = Contact::findorfail($id);
        return view('admin.contact.show', compact('data'));
    }
    public function show_reply($id)
    {
        $data = Contact::find($id);
        return view('admin.contact.show-reply', compact('data'));
    }

    public function contact_reply(ReplyRequest $request)
    {
        $contact = Contact::find($request->contact_id);

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

    public function order(){


//         header("Location: https://checkout-stg.noonpayments.com/en/default/index?info=n8ZsQlSHKhpYZ00YgIvAM946RgAIKWDslWcj4iaZjPGeZn7nAPMCEUO0dHsklw%3D%3D");
// die();

        $fields = array(
            "apiOperation" => "INITIATE",
            "order" => [
                "reference" => "NPAEORD0011221",
                "amount" => "10",
                "currency" => "SAR",
                "name" => "Sample order name",
                "channel" => "Web",
                "category" => "pay"
            ],
            "configuration" => [
                "tokenizeCc" => "true",
                "returnUrl"=> "https://sklf.com.sa/ar",
                "locale" => "en"
            ]
        );
        // $fields = json_encode($fields);

        $ch = curl_init();

        curl_setopt($ch, CURLOPT_URL, "https://api-test.noonpayments.com/payment/v1//order");


        curl_setopt($ch, CURLOPT_HTTPHEADER, array('Content-Type: application/json',
        'Authorization: Key_Test c2tsZi5za2xmOjU2NjVjOGNhNmJkYTQzYzA5YWI5MzU3MjkxOGMzMTI3'));


        curl_setopt($ch, CURLOPT_POST, 1);
        curl_setopt($ch, CURLOPT_POSTFIELDS, json_encode($fields));
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
        curl_setopt($ch, CURLOPT_REFERER, 1);

        $result = curl_exec($ch);
        curl_close($ch);
        $url = json_decode($result)->result->checkoutData->postUrl;
        header("Location: $url");
        exit();

    }
}
