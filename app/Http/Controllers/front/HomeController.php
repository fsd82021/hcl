<?php

namespace App\Http\Controllers\front;

use App\Http\Controllers\Controller;
use App\Models\Category;
use App\Models\Page;
use App\Models\Partner;
use App\Models\Portfolio;
use App\Models\Property;
use App\Models\Service;
use App\Models\Statistic;
use App\Models\Team;
use App\Models\Testimonial;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index()
    {
        $slider_page = Page::where('identifier', 'slider')->first();
        $about = Page::where('identifier', 'about')->first();
        $services = Service::take(6)->get();
        $service_page = Page::where('identifier', 'service')->first();
        $categories = Category::get();
        $portfolios = Portfolio::get();
        $portfolio_page = Page::where('identifier', 'portfolio')->first();
        $start_page = Page::where('identifier', 'start')->first();
        $statistic_page = Page::where('identifier', 'statistic')->first();
        $statistics = Statistic::get();
        $testimonial_page = Page::where('identifier', 'testimonial')->first();
        $testimonials = Testimonial::get();
        $team_page = Page::where('identifier', 'team')->first();
        $teams = Team::get();
        $partners = Partner::get();
        $blogs = Property::take(3)->get();
        $blog_page = Page::where('identifier', 'blog')->first();
        $contact_page = Page::where('identifier', 'contact')->first();


        return view('front.index', compact(
            'slider_page',
            'about',
            'services',
            'service_page',
            'categories',
            'portfolios',
            'partners',
            'portfolio_page',
            'start_page',
            'statistics',
            'statistic_page',
            'testimonial_page',
            'testimonials',
            'team_page',
            'teams',
            'blogs',
            'blog_page',
            'contact_page'
        ));
    }
}
