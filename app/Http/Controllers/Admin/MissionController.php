<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\PagesRequest;
use App\Models\Page;
use Illuminate\Http\Request;

class MissionController extends Controller
{
    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit()
    {
        $data = Page::where('identifier', 'mission')->first();
        return view('admin.mission.edit', compact('data'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(PagesRequest $request)
    {
        $data =  $request->all();
        $general = Page::where('identifier', 'mission')->first();
        if ($request->hasFile('icon')) {
            $file = $request->file('icon');
            $data['icon']  = upload_image($file, 'image_');
        } else {
            $data['icon'] = $general->icon;
        }

        $general->fill($data)->save();
        return $general ? redirect(route('mission.edit'))->with(['success' => trans('general.updated_success')]) : redirect()->back();
    }


    public function vision_edit()
    {
        $data = Page::where('identifier', 'vision')->first();
        return view('admin.vision.edit', compact('data'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function vision_update(PagesRequest $request)
    {
        $data =  $request->all();
        $general = Page::where('identifier', 'vision')->first();
        if ($request->hasFile('icon')) {
            $file = $request->file('icon');
            $data['icon']  = upload_image($file, 'image_');
        } else {
            $data['icon'] = $general->icon;
        }

        $general->fill($data)->save();
        return $general ? redirect(route('vision.edit'))->with(['success' => trans('general.updated_success')]) : redirect()->back();
    }





    public function about_edit()
    {
        $data = Page::where('identifier', 'about')->first();
        return view('admin.about.edit', compact('data'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function about_update(PagesRequest $request)
    {
        $data =  $request->all();
        $general = Page::where('identifier', 'about')->first();
        if ($request->hasFile('icon')) {
            $file = $request->file('icon');
            $data['icon']  = upload_image($file, 'image_');
        } else {
            $data['icon'] = $general->icon;
        }

        $general->fill($data)->save();
        return $general ? redirect(route('about.edit'))->with(['success' => trans('general.updated_success')]) : redirect()->back();
    }

    public function slider_edit ()
    {
        $data = Page::where('identifier', 'slider')->first();
        return view('admin.slider.edit', compact('data'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function slider_update(Request $request)
    {
        $data =  $request->all();
        $general = Page::where('identifier', 'slider')->first();
        if ($request->hasFile('icon')) {
            $file = $request->file('icon');
            $data['icon']  = upload_image($file, 'image_');
        } else {
            $data['icon'] = $general->icon;
        }

        $general->fill($data)->save();
        return $general ? redirect(route('slider.edit'))->with(['success' => trans('general.updated_success')]) : redirect()->back();
    }

    public function testimonial_edit ()
    {
        $data = Page::where('identifier', 'testimonial')->first();
        return view('admin.testimonial.edit', compact('data'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function testimonial_update(PagesRequest $request)
    {
        $data =  $request->all();
        $general = Page::where('identifier', 'testimonial')->first();
        if ($request->hasFile('icon')) {
            $file = $request->file('icon');
            $data['icon']  = upload_image($file, 'image_');
        } else {
            $data['icon'] = $general->icon;
        }

        $general->fill($data)->save();
        return $general ? redirect(route('testimonial.edit'))->with(['success' => trans('general.updated_success')]) : redirect()->back();
    }

    public function service_page_edit()
    {
        $data = Page::where('identifier', 'service')->first();
        return view('admin.service_page.edit', compact('data'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function service_page_update(PagesRequest $request)
    {
        $data =  $request->all();
        $general = Page::where('identifier', 'service')->first();
        if ($request->hasFile('icon')) {
            $file = $request->file('icon');
            $data['icon']  = upload_image($file, 'image_');
        } else {
            $data['icon'] = $general->icon;
        }

        $general->fill($data)->save();
        return $general ? redirect(route('service_page'))->with(['success' => trans('general.updated_success')]) : redirect()->back();
    }

    public function blog_page_edit()
    {
        $data = Page::where('identifier', 'blog')->first();
        return view('admin.blog_page.edit', compact('data'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function blog_page_update(PagesRequest $request)
    {
        $data =  $request->all();
        $general = Page::where('identifier', 'blog')->first();
        if ($request->hasFile('icon')) {
            $file = $request->file('icon');
            $data['icon']  = upload_image($file, 'image_');
        } else {
            $data['icon'] = $general->icon;
        }

        $general->fill($data)->save();
        return $general ? redirect(route('blog_page'))->with(['success' => trans('general.updated_success')]) : redirect()->back();
    }
    public function team_page_edit()
    {
        $data = Page::where('identifier', 'team')->first();
        return view('admin.team_page.edit', compact('data'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function team_page_update(PagesRequest $request)
    {
        $data =  $request->all();
        $general = Page::where('identifier', 'team')->first();
        if ($request->hasFile('icon')) {
            $file = $request->file('icon');
            $data['icon']  = upload_image($file, 'image_');
        } else {
            $data['icon'] = $general->icon;
        }

        $general->fill($data)->save();
        return $general ? redirect(route('team_page'))->with(['success' => trans('general.updated_success')]) : redirect()->back();
    }


    public function statistic_page_edit ()
    {
        $data = Page::where('identifier', 'statistic')->first();
        return view('admin.statistic_page.edit', compact('data'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function statistic_page_update(PagesRequest $request)
    {
        $data =  $request->all();
        $general = Page::where('identifier', 'statistic')->first();
        if ($request->hasFile('icon')) {
            $file = $request->file('icon');
            $data['icon']  = upload_image($file, 'image_');
        } else {
            $data['icon'] = $general->icon;
        }

        $general->fill($data)->save();
        return $general ? redirect(route('statistic_page'))->with(['success' => trans('general.updated_success')]) : redirect()->back();
    }


    public function portfolios_page_edit()
    {
        $data = Page::where('identifier', 'portfolio')->first();
        return view('admin.portfolios_page.edit', compact('data'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function portfolios_page_update(PagesRequest $request)
    {
        $data =  $request->all();
        $general = Page::where('identifier', 'portfolio')->first();
        if ($request->hasFile('icon')) {
            $file = $request->file('icon');
            $data['icon']  = upload_image($file, 'image_');
        } else {
            $data['icon'] = $general->icon;
        }

        $general->fill($data)->save();
        return $general ? redirect(route('portfolios_page'))->with(['success' => trans('general.updated_success')]) : redirect()->back();
    }


    public function contact_page_edit()
    {
        $data = Page::where('identifier', 'contact')->first();
        return view('admin.contact_page.edit', compact('data'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function contact_page_update(PagesRequest $request)
    {
        $data =  $request->all();
        $general = Page::where('identifier', 'contact')->first();
        if ($request->hasFile('icon')) {
            $file = $request->file('icon');
            $data['icon']  = upload_image($file, 'image_');
        } else {
            $data['icon'] = $general->icon;
        }

        $general->fill($data)->save();
        return $general ? redirect(route('contact_page'))->with(['success' => trans('general.updated_success')]) : redirect()->back();
    }

    public function start_page_edit ()
    {
        $data = Page::where('identifier', 'chalange')->first();
        return view('admin.start_page.edit', compact('data'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function start_page_update(PagesRequest $request)
    {
        $data =  $request->all();

        $general = Page::where('identifier', 'chalange')->first();

        $general->fill($data)->save();
        return $general ? redirect(route('start_page'))->with(['success' => trans('general.updated_success')]) : redirect()->back();
    }

    public function how_we_are_edit  ()
    {
        $data = Page::where('identifier', 'how_we_are')->first();
        return view('admin.how_we_are.edit', compact('data'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function how_we_are_update(PagesRequest $request)
    {
        $data =  $request->all();
        $general = Page::where('identifier', 'how_we_are')->first();
        if ($request->hasFile('icon')) {
            $file = $request->file('icon');
            $data['icon']  = upload_image($file, 'image_');
        } else {
            $data['icon'] = $general->icon;
        }

        $general->fill($data)->save();
        return $general ? redirect(route('how_we_are'))->with(['success' => trans('general.updated_success')]) : redirect()->back();
    }

}
