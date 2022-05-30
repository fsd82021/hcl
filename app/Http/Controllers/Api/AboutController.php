<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Http\Requests\Site\ContactFormRequest;
use App\Models\Contact;
use App\Models\Page;
use App\Models\Setting;
use Illuminate\Http\Request;
use Validator;
use App\Http\Controllers\Api\BaseController as BaseController;
use App\Models\Question;

class AboutController extends BaseController
{
    public function about(Request $request){
        $mission = Page::where('identifier','mission')->first();
        $data['mission']['icon'] =asset($mission->icon);
        $data['mission']['title'] = $mission->translate($request->lang)->title;
        $data['mission']['description'] = $mission->translate($request->lang)->description;

        $vision = Page::where('identifier','vision')->first();
        $data['vision']['icon'] =asset($vision->icon);
        $data['vision']['title'] = $vision->translate($request->lang)->title;
        $data['vision']['description'] = $vision->translate($request->lang)->description;

        $about = Page::where('identifier','about')->first();
        $data['about']['icon'] =asset($about->icon);
        $data['about']['title'] = $about->translate($request->lang)->title;
        $data['about']['description'] = $about->translate($request->lang)->description;

        $data['breadcrumb'] = asset(Setting::first()->breadcrumb);
        return response()->json([
            'status' => 'true',
            'data' => $data,
        ]);
    }

    public function contact(Request $request){
        $setting = Setting::first();
        $data['email'] = $setting->email;
        $data['phone'] = $setting->phone;
        $data['address'] = $setting->translate($request->lang)->address;
        return response()->json([
            'status' => 'true',
            'data' => $data,
        ]);
    }

    public function post_contact(Request $request) {
        $validator = Validator::make($request->all(), [
            'name' => 'required',
            'email' => 'required|email',
            'phone' => 'required',
            'message' => 'required',
        ]);
        if ($validator->fails()) {
            return $this->sendError('Validation Error.', $validator->errors());
        }
        $data = $request->all();
        $success = Contact::create($data);
        return $this->sendResponse($success, 'تم ارسال الرسالة بنجاح');
    }

    public function post_question(Request $request) {
        $validator = Validator::make($request->all(), [
            'name' => 'required',
            'phone' => 'required|numeric',
            'message' => 'required',
        ]);
        if ($validator->fails()) {
            return $this->sendError('Validation Error.', $validator->errors());
        }
        $data = $request->all();
        $success = Question::create($data);
        return $this->sendResponse($success, 'تم ارسال السؤال بنجاح');
    }


    public function setting(Request $request){
        $data = Setting::first();
        $data['logo'] = asset($data->logo);
        $data['breadcrumb'] = asset($data->breadcrumb);
        $data['website_title'] = $data->translate($request->lang)->website_title;
        $data['meta_title'] = $data->translate($request->lang)->meta_title;
        $data['meta_description'] = $data->translate($request->lang)->meta_description;
        $data['meta_keywords'] = $data->translate($request->lang)->meta_keywords;
        $data['address'] = $data->translate($request->lang)->address;
        $data['footer_description'] = $data->translate($request->lang)->footer_description;
        return response()->json([
            'status' => 'true',
            'data'   => $data
        ]);
    }
}
