<?php

namespace App\Http\Controllers\front;

use App\Http\Controllers\Controller;
use App\Models\Page;
use App\Models\Service;
use Illuminate\Http\Request;

class ServiceController extends Controller
{
    public function index(){
        $services = Service::get();
        $service_page = Page::where('identifier','service')->first();
        return view('front.services.index',compact('services','service_page'));

    }

    public function service($id){
        $service = Service::find($id);
        $contact_page = Page::where('identifier','contact')->first();
        return view('front.services.details',compact('service','contact_page'));
    }
}
