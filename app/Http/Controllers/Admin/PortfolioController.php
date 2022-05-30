<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\PortfolioRequests;
use App\Http\Requests\PropertyRequests;
use App\Models\Category;
use App\Models\Portfolio;
use Illuminate\Http\Request;
use PhpParser\Node\Expr\AssignOp\Pow;

class PortfolioController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data = Portfolio::all();
        return view('admin.portfolios.index', compact('data'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $categories = Category::get();
        return view('admin.portfolios.create', compact('categories'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(PortfolioRequests $request)
    {
        $data = $request->all();
        if ($request->hasFile('image')) {
            $file = $request->file('image');
            $data['main_image']  = upload_image($file, 'image_');
        } else {
            $data['main_image'] = '';
        }
        $portfolio = Portfolio::create($data);

        return $portfolio ? redirect(route('portfolios.index'))->with(['success' => trans('general.added_success')]) : redirect()->back();
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $data = Portfolio::findorfail($id);
        return view('admin.portfolios.show', compact('data'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $data = Portfolio::findOrfail($id);
        $categories = Category::get();
        return view('admin.portfolios.edit', compact('data', 'categories'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(PortfolioRequests $request, $id)
    {
        $data = $request->all();
        $general = Portfolio::findOrfail($id);

        if ($request->hasFile('image')) {
            $file = $request->file('image');
            $data['main_image']  = upload_image($file, 'image_');
        } else {
            $data['main_image'] =  $general->main_image;
        }

        $general->fill($data)->save();
        return $general ? redirect(route('portfolios.index'))->with(['success' => trans('general.added_success')]) : redirect()->back();
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $general = Portfolio::findOrfail($id);
        $general->translations()->delete();
        $general->delete();
        return redirect(route('portfolios.index'))->with(['success' => trans('general.deleted_success')]);
    }
}
