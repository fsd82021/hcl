<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Http\Resources\CategoryResource;
use App\Http\Resources\PropertiesResource;
use App\Models\Category;
use App\Models\Property;
use App\Models\PropertyTranslation;
use GrahamCampbell\ResultType\Success;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function home(Request $request)
    {
        $properties = Property::take(6)->get();
        $hot = Property::take(6)->orderBy('id', 'desc')->get();
        $featured = Property::where('featured', '1')->get();
        $data['blogs'] = PropertiesResource::collection($properties);
        $data['featured'] = PropertiesResource::collection($featured);
        $data['recent'] = PropertiesResource::collection(Property::orderBy('id','desc')->take(5)->get());
        $data['categories'] =  CategoryResource::collection(Category::get());

        return response()->json([
            'status' => 'Success',
            'data'   => $data
        ]);
    }

    public function filter(Request $request)
    {

        $text = $request->text;

        $data = Property::orderBy('id', 'desc');

        if ($text != null) {
            $find_property_id = PropertyTranslation::Where('title', 'LIKE', '%' . $text . '%')->orWhere('description', 'LIKE', '%' . $text . '%')->pluck('property_id')->toArray();
            $data = $data->whereIn('id', $find_property_id);
        }
        $data = PropertiesResource::collection($data->get());

        return response()->json([
            'status' => 'success',
            'data' => $data
        ]);
    }
}
