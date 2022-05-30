<?php

namespace App\Http\Controllers\front;

use App\Http\Controllers\Controller;
use App\Http\Requests\CommentRequest;
use App\Models\Category;
use App\Models\Comment;
use App\Models\Page;
use App\Models\Property;
use Illuminate\Http\Request;

class BlogController extends Controller
{
    public function index()
    {
        $blogs = Property::get();
        $blog_page = Page::where('identifier','blog')->first();
        return view('front.blog.index', compact('blogs', 'blog_page'));
    }

    public function blog($id)
    {
        $blog = Property::find($id);
        $blogs = Property::orderBy('id', 'desc')->take(5)->get();
        $contact_page = Page::where('identifier','contact')->first();
        return view('front.blog.details', compact('blog', 'contact_page', 'blogs'));
    }


}
