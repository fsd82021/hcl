<?php

namespace App\Http\Controllers\front;

use App\Http\Controllers\Controller;
use App\Http\Requests\ContactRequest;
use App\Models\Contact;
use App\Models\Page;
use App\Models\Setting;
use Illuminate\Http\Request;

class ContactController extends Controller
{
    public function index(){
        $setting = Setting::first();
        $contact_page = Page::where('identifier','contact')->first();
        return view('front.contact',compact('setting','contact_page'));
    }
    public function contact_post(ContactRequest $request)
    {
        Contact::create($request->all());
        return response()->json(trans('site.sent_successully'));
    }

}
