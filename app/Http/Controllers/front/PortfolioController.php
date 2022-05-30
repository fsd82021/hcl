<?php

namespace App\Http\Controllers\front;

use App\Http\Controllers\Controller;
use App\Models\Category;
use App\Models\Page;
use App\Models\Portfolio;
use Illuminate\Http\Request;

class PortfolioController extends Controller
{
    public function index()
    {
        $categories = Category::get();
        $portfolios = Portfolio::get();
        $portfolio_page = Page::where('identifier','portfolio')->first();
        return view('front.portfolio',compact('categories','portfolios','portfolio_page'));
    }
}
