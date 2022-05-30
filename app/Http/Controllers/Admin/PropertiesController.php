<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Category;
use App\Models\Property;
use Illuminate\Http\Request;
use App\Http\Requests\PropertyRequests;
use App\Models\Comment;
use App\Models\PropertyImage;

class PropertiesController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data = Property::all();
        return view('admin.properties.index', compact('data'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $categories = Category::get();
        return view('admin.properties.create', compact('categories'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(PropertyRequests $request)
    {
        $data = $request->all();
        if ($request->hasFile('image')) {
            $file = $request->file('image');
            $data['main_image']  = upload_image($file, 'image_');
        } else {
            $data['main_image'] = '';
        }
        $property = Property::create($data);

        return $property ? redirect(route('properties.index'))->with(['success' => trans('general.added_success')]) : redirect()->back();
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $data = Property::findorfail($id);
        return view('admin.properties.show', compact('data'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $data = Property::findOrfail($id);
        $categories = Category::get();
        return view('admin.properties.edit', compact('data', 'categories'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(PropertyRequests $request, $id)
    {
        $data = $request->all();
        $general = Property::findOrfail($id);

        if ($request->hasFile('image')) {
            $file = $request->file('image');
            $data['main_image']  = upload_image($file, 'image_');
        } else {
            $data['main_image'] =  $general->main_image;
        }

        $general->fill($data)->save();
        return $general ? redirect(route('properties.index'))->with(['success' => trans('general.added_success')]) : redirect()->back();
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $general = Property::findOrfail($id);
        $general->translations()->delete();
        $general->delete();
        return redirect(route('properties.index'))->with(['success' => trans('general.deleted_success')]);
    }

    public function comments($id){
        $data = Comment::where('property_id',$id)->get();
        return view('admin.properties.comments', compact('data'));
    }
}
