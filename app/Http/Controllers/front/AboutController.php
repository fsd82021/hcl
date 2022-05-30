<?php

namespace App\Http\Controllers\front;

use App\Http\Controllers\Controller;
use App\Models\Page;
use App\Models\Partner;
use App\Models\Statistic;
use Illuminate\Http\Request;

class AboutController extends Controller
{
    public function index()
    {
        $about = Page::where('identifier', 'about')->first();
        $how_we_are = Page::where('identifier', 'how_we_are')->first();
        $statistic_page = Page::where('identifier', 'statistic')->first();
        $statistics = Statistic::get();
        $partners = Partner::get();
        return view('front.about', compact('how_we_are', 'about', 'statistics', 'statistic_page', 'partners'));
    }
}
