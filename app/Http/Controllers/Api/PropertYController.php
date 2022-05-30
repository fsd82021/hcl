<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Http\Resources\CategoryResource;
use App\Http\Resources\PropertiesResource;
use App\Http\Resources\PropertyResource;
use App\Models\Category;
use App\Models\Property;
use App\Models\PropertyRequest;
use Illuminate\Http\Request;

class PropertYController extends Controller
{
    public function properties(Request $request)
    {
        $properties = Property::get();
        $data['data'] = PropertiesResource::collection($properties);
        $data['recent'] = PropertiesResource::collection(Property::orderBy('id','desc')->take(5)->get());
        $data['categories'] =  CategoryResource::collection(Category::get());
        return $data;
    }
    public function categoryProperties(Request $request)
    {
        $properties = Property::where('category_id', $request->category_id)->get();
        return PropertiesResource::collection($properties);
    }
    public function singlePropety(Request $request)
    {
        return new PropertiesResource(Property::find($request->id));
    }

}
