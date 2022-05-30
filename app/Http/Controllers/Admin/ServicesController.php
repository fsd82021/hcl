<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\PropertyRequests;
use App\Models\Service;
use Illuminate\Http\Request;

class ServicesController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $data = Service::all();
        return view('admin.services.index', compact('data'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.services.create');
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
        $service = Service::create($data);

        return $service ? redirect(route('services.index'))->with(['success' => trans('general.added_success')]) : redirect()->back();
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $data = Service::findorfail($id);
        return view('admin.services.show', compact('data'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $data = Service::findOrfail($id);
        return view('admin.services.edit', compact('data'));
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
        $general = Service::findOrfail($id);

        if ($request->hasFile('image')) {
            $file = $request->file('image');
            $data['main_image']  = upload_image($file, 'image_');
        } else {
            $data['main_image'] =  $general->main_image;
        }

        $general->fill($data)->save();
        return $general ? redirect(route('services.index'))->with(['success' => trans('general.added_success')]) : redirect()->back();
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $general = Service::findOrfail($id);
        $general->translations()->delete();
        $general->delete();
        return redirect(route('services.index'))->with(['success' => trans('general.deleted_success')]);
    }
}
